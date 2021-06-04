<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
        	array(
		 'name' => "Asif Ahmed",
		 'email' => 'asifahmed.mist@gmail.com',
		 'password' => bcrypt('test1234'),
		        	)
		));
    }
}
