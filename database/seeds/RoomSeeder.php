<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = [
    		['name' => 'one', 'status' => 'available', 'floor_level' => '1', 'room_type_id' => '1'],
    		['name' => 'two', 'status' => 'occupied', 'floor_level' => '2', 'room_type_id' => '2'],
    		['name' => 'three', 'status' => 'available', 'floor_level' => '3', 'room_type_id' => '3']
    	];

    	DB::table('rooms')->insert($room);
    }
}
