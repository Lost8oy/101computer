<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ShelvesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Shelves')->delete();
        DB::table('Shelves')->insert(array (
            0 => 
            array (
                'id' => 2,
                'unit_id' => 1,
                'code' => '01',
                'description' => 'keyboard jupiter',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}