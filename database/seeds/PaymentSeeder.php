<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = [
    		['status' => 'paid', 'description' => 'text', 'guest_id' => '1'],
            ['status' => 'unpaid', 'description' => 'text', 'guest_id' => '2'],
            ['status' => 'paid', 'description' => 'text', 'guest_id' => '3']
    	];

    	DB::table('payments')->insert($payment);
    }
}
