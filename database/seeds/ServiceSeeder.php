<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = [
    		['name' => 'Massage', 'description' => 'Full Body Massage', 'guest_id' => '1'],
    		['name' => 'Catering', 'description' => 'Full Course Dinner', 'guest_id' => '2'],
    		['name' => 'Massage', 'description' => 'Facial Massage', 'guest_id' => '3']
    	];

    	DB::table('services')->insert($service);
    }
}
