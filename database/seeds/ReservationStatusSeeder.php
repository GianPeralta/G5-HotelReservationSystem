<?php

use Illuminate\Database\Seeder;

class ReservationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation_status = [
    		['reservation_id' => '1', 'status' => 'approved', 'description' => 'text'],
            ['reservation_id' => '2', 'status' => 'approved', 'description' => 'text'],
            ['reservation_id' => '3', 'status' => 'awaiting approval', 'description' => 'text']
    	];

    	DB::table('reservation_statuses')->insert($reservation_status);
    }
}
