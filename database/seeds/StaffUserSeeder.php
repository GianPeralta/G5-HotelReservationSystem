<?php

use Illuminate\Database\Seeder;

class StaffUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff_user = [
    		['name' => 'Blitzcrank', 'user_role_id' => '1'],
    		['name' => 'Akali', 'user_role_id' => '2'],
    		['name' => 'Shen', 'user_role_id' => '2'],
    		['name' => 'Kennen', 'user_role_id' => '2'],
    		['name' => 'Pantheon', 'user_role_id' => '3']
    	];

    	DB::table('staff_users')->insert($staff_user);
    }
}
