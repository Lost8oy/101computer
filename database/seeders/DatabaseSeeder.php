<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { 
        $this->call(CountriesTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
        $this->call(BuildingsTableSeeder::class);
        $this->call(ZonesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(ShelvesTableSeeder::class);
        $this->call(ComputersTableSeeder::class);
        $this->call(MonitorsTableSeeder::class);
        $this->call(ContainersTableSeeder::class);
    }
}
