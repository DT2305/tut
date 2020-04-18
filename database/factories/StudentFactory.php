<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Student::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Nam', 'Nữ']);
    return [
        'name' => $faker->name($gender),
        'gender'=>$gender,
        'email' => $faker->unique()->freeEmail,
        'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'identify_number'=>$faker->unique()->numerify('############'),
        'phone_number'=>$faker->unique()->numerify('0#########'),
        'address'=>$faker->address,
        'student_code'=>$faker->unique()->numerify('16#####'),

//        'avatar'=>$faker->image('public/images/student_images', 135, 180, 'cats',false,false),

        'password' => '$2y$10$mDiApZUTGuhootggH3U9Ru9DvY8NUgnzPd13hbmeOSvKw0vuXGj5i', // password: 1
        'remember_token' => Str::random(10),

    ];
});
