<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;


class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('countries')->delete();
        DB::table('countries')->insert(array (
            0=>
            array (
                'id'=> 1,
                'name'=> 'United States',
                'description'=> 'none'
            ),
            1=>
            array(
                "id"=>2,
                "name"=>"Canada",
                "description" => "none"
            ),
            2=>
            array(
                "id"=>3,
                "name"=>"Mexico",
                "description" => "none"
            ),
            3=>
            array(
                "id"=>4,
                "name"=>"Brazil",
                "description" => "none"
            ),
            4=>
            array(
                "id"=>5,
                "name"=>"Czech Republic",
                "description" => "none"
            ),
            5=>
            array(
                "id"=>6,
                "name"=>"Germany",
                "description" => "none"
            ),
            6=>
            array(
                "id"=>7,
                "name"=>"Japan",
                "description" => "none"
            )
            ));
        
        
    }
}