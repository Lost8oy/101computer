<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class BuildingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Buildings')->delete();
        DB::table('Buildings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country' => 'Malta',
                'city' => 'Mosta',
                'address' => 'Mosta techno park',
                'civic_n' => '3000',
                'cap' => '2309',
                'description' => 'hq',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}