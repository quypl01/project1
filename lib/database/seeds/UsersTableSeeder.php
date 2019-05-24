<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'email' => 'quytran@floordi.com',
        		'password' => bcrypt('123456'),
        		'level'=>1
        	],
        	[
        		'email' => 'admin@floordi.com',
        		'password' => bcrypt('123456'),
        		'level'=>1
        	],
        ];
        DB::table('vp_users')->insert($data);
    }
}
