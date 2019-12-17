<?php

use App\Employees;
use App\Jobs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(Employees::class)->create();
        $employees = factory(\App\Employees::class, 150)->create();
        $jobs = factory(\App\Jobs::class, 10)->create();
    }
}
