<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;
class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('computers')->insert([
            'inventory_number' => Str()::random(50),
            'serial_number' => Str::random(50).'@gmail.com',
            'model'=> Str::random(50),
            'submodel'=> Str::random(50),
            'processor'=> Str::random(50),
            'speed'=> Str::random(),
            
        ]);
    }
}
