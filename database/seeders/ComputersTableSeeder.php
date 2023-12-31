<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ComputersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Computers')->delete();
        DB::table('Computers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bool_position' => 0,
                'position_id' => 0,
                'manufacturer_id' => 1,
                'inventory_number' => '01',
                'serial_number' => '42546464672772',
                'model' => 'Apple II',
                'submodel' => 'Apple',
                'processor' => 'MOS 6502',
                'power' => '34W',
                'speed' => '1 MHz',
                'year' => '1977-01-01',
                'bit' => '8',
                'description' => 'The Apple II is an 8-bit home computer and one of the world\'s first highly successful mass-produced microcomputer products.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'bool_position' => 1,
                'position_id' => 0,
                'manufacturer_id' => 1,
                'inventory_number' => 'C0003',
                'serial_number' => 'VM138FLLR',
                'model' => 'Apple IMac',
                'submodel' => 'M5521',
                'processor' => 'Power PC 750',
                'power' => '80W',
                'speed' => '333MHz',
                'year' => '2000-01-01',
                'bit' => '32',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}