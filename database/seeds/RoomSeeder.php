<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            DB::table("rooms")->insert([
            "name"=>$faker->name, 
            'image' => "public/demo.PNG",
            "typeroom"=>"Phong family",
            "number"=>"4 nguoi",
            "area"=>"45m2",
            "price"=>1200000
            ]);
        }
    }
}