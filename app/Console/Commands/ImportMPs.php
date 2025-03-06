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

    public $baseUrl = "https://members-api.parliament.uk/api/Members/Search?House=1&IsCurrentMember=true&take=20&skip=";

    public function importPage($startIndex) {
        $response = Http::get($this->baseUrl . $startIndex);
        $content = $response->json();
        foreach ($content['items'] as $item) {
            Mp::updateOrCreate([
                'parliament_id' => $item['value']['id'],
            ], [
                'name' => $item['value']['nameDisplayAs'], // TODO: should maybe use ‘address as’ here
                'party' => $item['value']['latestParty']['name'],
                'photo' => $item['value']['thumbnailUrl'], // TODO: hotlinking for now
                'pcon_code' => $item['value']['latestHouseMembership']['membershipFromId'],
                'pcon_name' => $item['value']['latestHouseMembership']['membershipFrom']
            ]);
        }
        sleep(0.5);
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
            $content = $this->importPage($startIndex);

            $totalResults = $content['totalResults'];

            $bar = $this->output->createProgressBar($totalResults);
            $bar->start();

            $totalImported = count($content['items']);
            $bar->advance(count($content['items']));
            $startIndex += $totalImported;

            while ($content['items']) {
                $content = $this->importPage($startIndex);

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
