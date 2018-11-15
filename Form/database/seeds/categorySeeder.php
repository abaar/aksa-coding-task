<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
        	'name'=>'tahu',
        	'description' => 'sebuah tahu'
        ]);

        DB::table('category')->insert([
        	'name'=>'tempe',
        	'description'=>'sebuah tempe'
        ]);
    }
}
