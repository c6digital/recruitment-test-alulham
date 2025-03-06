<?php

namespace App\Console\Commands;

use App\Models\Mp;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ImportMPs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:mps';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import MPs from parliament.uk members API';

    public $baseUrl = "https://members-api.parliament.uk/api/Members/";

    public function fetchMpEmail($mpId) {
        $response = Http::get($this->baseUrl . $mpId . '/Contact');
        sleep(0.5);
        $content = $response->json();
        foreach ($content['value'] as $contact) {
            if ($contact['type'] == 'Parliamentary office' && array_key_exists('email', $contact)) {
                return $contact['email'];
            }
            if ($contact['type'] == 'Constituency office' && array_key_exists('email', $contact)) {
                return $contact['email'];
            }
        }
        $this->error('No email address found for ' . $mpId);
    }

    public function fetchMpPage($startIndex) {
        $response = Http::get($this->baseUrl . 'Search?House=1&IsCurrentMember=true&take=20&skip=' . $startIndex);
        sleep(0.5);
        $content = $response->json();
        foreach ($content['items'] as $item) {
            $mpId = $item['value']['id'];
            $email = $this->fetchMpEmail($mpId);
            Mp::updateOrCreate([
                'parliament_id' => $mpId,
            ], [
                'name' => $item['value']['nameDisplayAs'], // TODO: should maybe use ‘address as’ here
                'email' => $email,
                'party' => $item['value']['latestParty']['name'],
                'photo' => $item['value']['thumbnailUrl'], // TODO: hotlinking for now
                'pcon_code' => $item['value']['latestHouseMembership']['membershipFromId'],
                'pcon_name' => $item['value']['latestHouseMembership']['membershipFrom']
            ]);
        }
        return $content;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting MP import...');

        // Begin transaction
        DB::beginTransaction();

        try {
            $startIndex = 0;
            $content = $this->fetchMpPage($startIndex);

            $totalResults = $content['totalResults'];

            $bar = $this->output->createProgressBar($totalResults);
            $bar->start();

            $totalImported = count($content['items']);
            $bar->advance(count($content['items']));
            $startIndex += $totalImported;

            while ($content['items']) {
                $content = $this->fetchMpPage($startIndex);

                $totalImported = count($content['items']);
                $bar->advance(count($content['items']));
                $startIndex += $totalImported;
            }
            DB::commit();
            $bar->finish();

            $this->newLine();
            $this->info('Import completed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            $this->newLine();
            $this->error('Import failed: ' . $e->getMessage());
            return 1;
        }
    }
}
