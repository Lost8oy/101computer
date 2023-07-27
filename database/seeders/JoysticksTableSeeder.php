<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class JoysticksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Joysticks')->delete();
        DB::table('Joysticks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bool_position' => 0,
                'position_id' => 0,
                'manufacturer_id' => 4,
                'inventory_number' => 'P0029',
                'serial_number' => 'none',
                'year' => '1972-01-01',
                'model' => 'Paddle',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}