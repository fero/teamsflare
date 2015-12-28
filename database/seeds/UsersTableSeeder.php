<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'              => 'Victor Dumitru'
            , 'email'           => 'vctr.dumitru@gmail.com'
            , 'password'        => Hash::make("letmein")
        ]);
    }
}
