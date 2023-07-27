<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ManufacturersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Manufacturers')->delete();
        DB::table('Manufacturers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'name' => 'Apple',
                'link' => 'https://www.apple.com/',
                'description' => 'Apple Computers',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 1,
                'name' => 'IBM',
                'link' => 'https://www.ibm.com/us-en',
                'description' => 'International Business Machines Corporation is an American multinational information technology company.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 1,
                'name' => 'Commodore International',
                'link' => 'https://commodore.inc/',
                'description' => 'Commodore International was an American home computer and electronics manufacturer founded by Jack Tramiel.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 1,
                'name' => 'Atari',
                'link' => 'https://atari.com/',
                'description' => 'Atari is an American video game and gaming hardware company founded in 1972 by Nolan Bushnell and Ted Dabney.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 7,
                'name' => 'Nintendo',
                'link' => 'https://www.nintendo.com/',
                'description' => 'Nintendo Co. Ltd. is a Japanese company specializing in the production of video games and consoles.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 1,
                'name' => 'Rockwell',
                'link' => 'https://www.rockwellautomation.com/en-us.html',
                'description' => 'Rockwell Automation, the world\'s largest company dedicated to industrial automation and information.',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}