<?php

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
         $this->call(PermissionsSeeder::class); #req
         $this->call(PeopleSeeder::class);
         $this->call(SystemAdminSeeder::class);
         $this->call(RegionTableSeeder::class);
         $this->call(DistrictTableSeeder::class);
    }

}
