<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Student::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Nam', 'Nữ']);
    $course_id = $faker->randomElement(['2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']);
    return [
        'name' => $faker->name($gender),
        'gender'=>$gender,
        'email' => $faker->unique()->freeEmail,
        'birthday'=>$faker->date( 'Y-m-d', $max = 'now'),
        'identify_number'=>$faker->unique()->numerify('############'),
        'phone_number'=>$faker->unique()->numerify('0#########'),
        'address'=>$faker->address,
        'student_code'=>$faker->unique()->numerify('16#####'),
        'course_id'=>$course_id,
        'avatar'=>'https://source.unsplash.com/135x180/?cat',
        'password' => '$2y$10$mDiApZUTGuhootggH3U9Ru9DvY8NUgnzPd13hbmeOSvKw0vuXGj5i', // password: 1

        'start_date'=>'2016-08-22',
        'education_type'=>'Đại học chính quy - Tín chỉ	',
        'education_level'=>'Chính quy',
        'school_name'=>'Trường Đại học Kỹ thuật - Công nghệ Cần Thơ',




//        'avatar'=>$faker->image('public/user_images', 135, 180, false,false,true),


        'remember_token' => Str::random(10),

    ];
});
