<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Issues')->delete();
        DB::table('Issues')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item_id' => 1,
                'start_date' => '2023-07-05',
                'solved' => 1,
                'finish_date' => '2023-07-07',
                'comment' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}