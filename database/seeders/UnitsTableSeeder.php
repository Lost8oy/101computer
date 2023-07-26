<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Units')->delete();
        DB::table('Units')->insert(array (
            0 => 
            array (
                'id' => 1,
                'zone_id' => 1,
                'code' => '0470',
                'description' => 'keyboards unit with 5 shelves',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}