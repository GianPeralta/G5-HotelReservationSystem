<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	UserSeeder::class,
        	GuestSeeder::class,
        	PaymentSeeder::class,
        	ReservationSeeder::class,
        	ReservationStatusSeeder::class,
        	RoomSeeder::class,
        	RoomTypeSeeder::class,
        	ServiceSeeder::class,
        	StaffUserSeeder::class,
        	UserRoleSeeder::class
        ]);
    }
}
