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
        

        DB::table('manufacturers')->delete();
        DB::table('manufacturers')->insert(array (
            0=>
            array (
                'country_id'=>'1',
               'id'=>1,
               'name'=>'Apple',
               'link'=>'https://www.apple.com/',
               'description'=>'Apple Computers'
            ),
            1=>
            array(
                'country_id'=>'1',
                'id'=>2,
                'name'=>'IBM',
                'link'=>'https://www.ibm.com/us-en',
                'description'=>'International Business Machines Corporation is an American multinational information technology company.'
            ),
            2=>
            array(
                'country_id'=>'1',
                'id'=>3,
                'name'=>'Commodore International',
                'link'=>'https://commodore.inc/',
                'description'=>'Commodore International was an American home computer and electronics manufacturer founded by Jack Tramiel.'
            ),
            3=>
            array(
                'country_id'=>'1',
                'id'=>4,
                'name'=>'Atari',
                'link'=>'https://atari.com/',
                'description'=>'Atari is an American video game and gaming hardware company founded in 1972 by Nolan Bushnell and Ted Dabney.'
            ),
            4=>
            array(
                'country_id'=>'7',
                'id'=>5,
                'name'=>'Nintendo',
                'link'=>'https://www.nintendo.com/',
                'description'=>'Nintendo Co. Ltd. is a Japanese company specializing in the production of video games and consoles.'
            ),
            5=>
            array(
                'country_id'=>'1',
                'id'=>6,
                'name'=>'Rockwell',
                'link'=>'https://www.rockwellautomation.com/en-us.html',
                'description'=>'Rockwell Automation, the world\'s largest company dedicated to industrial automation and information.'
            )
            ));
        
        
        
    }
}