<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ContainersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Containers')->delete();
        DB::table('Containers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'shelf_id' => 1,
                'code' => '1093',
                'description' => 'stuff',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}