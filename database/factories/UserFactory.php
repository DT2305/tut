<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
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

//$factory->define(User::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
//    ];
//});

$factory->define(User::class, function (Faker $faker) {
    return array(
        'name' => $faker->name(null),
        'email' => $faker->unique()->freeEmail,
        'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'identify_number'=>$faker->unique()->numerify('############'),
        'phone_number'=>$faker->unique()->numerify('0#########'),
        'address'=>$faker->address,
        'password' => '1',
//        'avatar'=>$faker->image('public/images/userImages', 135, 180, 'cats',false,false),
//        'email_verified_at' => now(),

        'remember_token' => Str::random(10),
    );
});

