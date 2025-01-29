<?php

namespace App\Console\Commands;

use App\Models\HealthCondition;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportHealthConditions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:health-conditions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import health conditions from CSV file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting import of health conditions...');

        $file = database_path('imports/health_conditions_constituency.csv');
        
        if (!file_exists($file)) {
            $this->error('CSV file not found at: ' . $file);
            return 1;
        }

        // Read CSV file
        $csv = array_map('str_getcsv', file($file));
        $headers = array_shift($csv); // Remove headers

        $bar = $this->output->createProgressBar(count($csv));
        $bar->start();

        // Begin transaction
        DB::beginTransaction();

        try {
            foreach ($csv as $row) {
                // Skip the first empty column and map the rest
                array_shift($row);
                
                HealthCondition::create([
                    'pcon_code' => $row[0],
                    'pcon_name' => $row[1],
                    'group_code' => $row[2],
                    'prevalence' => floatval(str_replace('%', '', $row[3])),
                    'condition' => $row[4],
                    'description' => $row[5]
                ]);

                $bar->advance();
            }

            DB::commit();
            $bar->finish();

            $this->newLine();
            $this->info('Import completed successfully!');
            return 0;
        } catch (\Exception $e) {
            DB::rollBack();
            $this->newLine();
            $this->error('Import failed: ' . $e->getMessage());
            return 1;
        }
    }
}
