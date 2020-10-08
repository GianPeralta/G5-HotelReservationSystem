<?php

use Illuminate\Database\Seeder;
use App\Guest;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$guest = [
    		['first_name' => 'Juan', 'last_name' => 'Dela Cruz', 'contact_number' => '01234567899', 'email' => 'juan@test.com'],
            ['first_name' => 'Shauna', 'last_name' => 'Vayne', 'contact_number' => '01234567898', 'email' => 'vayne@test.com'],
            ['first_name' => 'Captain', 'last_name' => 'Teemo', 'contact_number' => '01234567897', 'email' => 'teemo@test.com']
    	];

    	DB::table('guests')->insert($guest);
    }
}
