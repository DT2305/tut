<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->freeEmail,
        'phone_number'=>$faker->unique()->numerify('0#########'),
        'identify_number'=>$faker->unique()->numerify('############'),
        'student_code'=>$faker->unique()->numerify('16#####'),
        'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),

        'password' => '$2y$10$mDiApZUTGuhootggH3U9Ru9DvY8NUgnzPd13hbmeOSvKw0vuXGj5i', // password: 1

    ];
});
