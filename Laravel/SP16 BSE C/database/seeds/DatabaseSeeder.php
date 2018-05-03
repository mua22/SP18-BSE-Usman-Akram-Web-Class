<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Product',20)->create();
        factory('App\User',5)->create();
        //$this->call(UsersTableSeeder::class);
    }
}
