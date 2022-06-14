<?php


use Illuminate\Database\Seeder;
use travel_packgesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(travel_packgesTableSeeder::class);
    }
}
