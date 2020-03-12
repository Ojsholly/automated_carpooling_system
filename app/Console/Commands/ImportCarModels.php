<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportCarModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:carmodels';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the 2 db tables (car_make and car_model) for cars from an sql file.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::unprepared(file_get_contents('database/migrations/cars.sql'));
    }
}
