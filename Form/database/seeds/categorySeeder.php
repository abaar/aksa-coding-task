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
        DB::table('categories')->insert([
        	'name'=>'pilem',
        ]);

        DB::table('categories')->insert([
        	'name'=>'maeman',
        ]);
    }
}
