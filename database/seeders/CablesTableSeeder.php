<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Cables')->delete();
        DB::table('Cables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bool_position' => 0,
                'position_id' => 0,
                'type' => ' Adapter DK\'Troniks',
                'description' => 'Adapter',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}