<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Nam', 'Nữ']);
    return [
        'name' => $faker->name($gender),
        'gender'=>$gender,
        'email' => $faker->unique()->freeEmail,
        'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'identify_number'=>$faker->unique()->numerify('############'),
        'phone_number'=>$faker->unique()->numerify('0#########'),
        'address'=>$faker->address,

//        'avatar'=>$faker->image('public/images/user_images', 135, 180, 'cats',false,false),
//        'email_verified_at' => now(),

        'password' => '$2y$10$mDiApZUTGuhootggH3U9Ru9DvY8NUgnzPd13hbmeOSvKw0vuXGj5i', // password: 1
        'remember_token' => Str::random(10),
    ];
});

