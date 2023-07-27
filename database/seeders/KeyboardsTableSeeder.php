<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class KeyboardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Keyboards')->delete();
        DB::table('Keyboards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bool_position' => 0,
                'position_id' => 0,
                'manufacturer_id' => 1,
                'inventory_number' => 'P0062',
                'serial_number' => 'KY11102MCK4VC',
                'year' => '2000-01-01',
                'model' => 'Apple Pro Keyboard M7803',
                'layout' => 'American',
                'switch' => 'Rubber dome, possibly Mitsumi KEK Type',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}