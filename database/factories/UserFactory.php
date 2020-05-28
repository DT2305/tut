<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Nam', 'Nữ']);

    return [
        'name' => $faker->name($gender),
        'gender' => $gender,
        'email' => $faker->unique()->freeEmail,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'identity_number' => $faker->unique()->numerify('############'),
        'phone_number' => $faker->unique()->numerify('0#########'),
        'address' => $faker->address,


//        'avatar'=>$faker->image('public/images/user_images', 135, 180, 'cats',false,false),
//        'email_verified_at' => now(),

        'admission_form' => $faker->numberBetween($min = 1, $max = 3),
        'major_1' => $faker->numberBetween($min = 2, $max = 17),
        'major_2' => $faker->numberBetween($min = 2, $max = 17),
        'major_3' => $faker->numberBetween($min = 2, $max = 17),

        'subject_combination_1' => $faker->numberBetween($min = 1, $max = 7),
        'subject_combination_2' => $faker->numberBetween($min = 1, $max = 7),
        'subject_combination_3' => $faker->numberBetween($min = 1, $max = 7),

        'total_point_1' => $faker->numberBetween($min = 10, $max = 30),
        'total_point_2' => $faker->numberBetween($min = 10, $max = 30),
        'total_point_3' => $faker->numberBetween($min = 10, $max = 30),

        'description'=>$faker->text,

        'password' => '$2y$10$mDiApZUTGuhootggH3U9Ru9DvY8NUgnzPd13hbmeOSvKw0vuXGj5i', // password: 1
        'remember_token' => Str::random(10),
    ];
});

