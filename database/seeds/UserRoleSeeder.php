<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = [
    		['title' => 'Chef'],
    		['title' => 'Medic'],
    		['title' => 'Bouncer']
    	];

    	DB::table('user_roles')->insert($user_role);
    }
}
