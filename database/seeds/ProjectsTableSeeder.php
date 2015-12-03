<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            \App\Project::create([
                'name'              => $faker->sentence(5)
                , 'description'     => $faker->paragraph(2)
                , 'body'            => $faker->paragraph(5)
            ]);
        }
    }
}
