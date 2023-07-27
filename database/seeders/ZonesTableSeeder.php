<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Zones')->delete();
        DB::table('Zones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'building_id' => 1,
                'denomination' => 'Handson Systems',
                'floor' => '1',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}