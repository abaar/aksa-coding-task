<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('product')->insert([
        	'category_id'=>1,
        	'name'=>'tahu poo',
        	'description' => 'sebuah tahu poo',
        	'price' =>1234
        ]);

	    DB::table('product')->insert([
        	'category_id'=>1,
        	'name'=>'tahu sultan',
        	'description' => 'sebuah tahu sultan',
        	'price' =>1000000
        ]);
        DB::table('product')->insert([
        	'category_id'=>2,
        	'name'=>'tempe mendoan',
        	'description' => 'sebuah tempe mendoan',
        	'price' =>2468
        ]);
        DB::table('product')->insert([
        	'category_id'=>2,
        	'name'=>'tempera',
        	'description' => 'sebuah tempe rasa tempura',
        	'price' =>100000
        ]);    	


    }
}
