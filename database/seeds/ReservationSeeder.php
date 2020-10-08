<?php

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = [
    		['date' => '2020-10-08', 'guest_id' => '1', 'room_id' => '1'],
            ['date' => '2020-10-09', 'guest_id' => '2', 'room_id' => '2'],
            ['date' => '2020-10-10', 'guest_id' => '3', 'room_id' => '3']
    	];

    	DB::table('reservations')->insert($reservation);
    }
}
