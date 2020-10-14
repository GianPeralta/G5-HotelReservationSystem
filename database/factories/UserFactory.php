<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Payment;
use App\Guest;
use App\RoomType;
use App\Room;
use App\Service;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Payment::class, function (Faker $faker) {
    return [
      'status' => $faker->status ,
      'description' => $faker->description

	];
});

$factory->define(Guest::class, function (Faker $faker){
	return[
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'contact_number' => $faker->e164PhoneNumber,
		'email' => $faker->freeEmail,

	];
});

$factory->define(RoomType::class, function (Faker $faker) {
    return [
        'standard_rate' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'description' => $faker->word,
    ];
});

$factory->define(Service::class, function (Faker $faker) {
    return [
      'name' => $faker->word ,
      'description' => $faker->word ,
      'guests_id' => $faker->userName

];
});

