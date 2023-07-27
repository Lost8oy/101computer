<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class MonitorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Monitors')->delete();
        DB::table('Monitors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bool_position' => 0,
                'position_id' => 0,
                'manufacturer_id' => 0,
                'inventory_number' => '02',
                'serial_number' => '8765456831',
                'model' => 'Amstrad ',
                'year' => '1984-01-01',
                'color' => 'Black',
                'size' => '14"',
                'pixels' => '320x200',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}