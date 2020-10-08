<?php

use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room_type = [
    		['standard_rate' => '100', 'description' => 'Regular'],
    		['standard_rate' => '500', 'description' => 'Suite'],
    		['standard_rate' => '750.1515', 'description' => 'Executive Suite']
    	];

    	DB::table('room_types')->insert($room_type);
    }
}
