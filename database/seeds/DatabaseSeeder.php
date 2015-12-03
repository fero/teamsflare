<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Project::truncate();
        \App\Company::truncate();

        Model::unguard();

        $this->call(ProjectsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);

        Model::reguard();
    }
}
