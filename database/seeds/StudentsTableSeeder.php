<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Liêu Hồng Thái',
                'gender'=>'Nam',
                'avatar'=>'https://source.unsplash.com/135x180/?cat',
                'email' => 'lht@gmail.com',
                'phone_number'  =>  '0987654324',
                'identify_number'  =>  '092098000911',
                'student_code'  =>  '1600000',
                'course_id'  =>  '7',
                'birthday'  =>  '1998-01-01',
                'address' => '200 Lê Thánh Tôn, P. Bến Thành, Quận 1, TP. HCM',
                'password' => bcrypt('1'),
                'start_date'=>'2016-08-22',
                'education_type'=>'Đại học chính quy - Tín chỉ	',
                'education_level'=>'Chính quy',
                'school_name'=>'Trường Đại học Kỹ thuật - Công nghệ Cần Thơ',

            ],
            [
                'name' => 'Nguyễn Hoàng Sơn Lâm',
                'gender'=>'Nam',
                'avatar'=>'https://source.unsplash.com/135x180/?cat',
                'email' => 'nhslam@gmail.com',
                'phone_number'  =>  '0987654325',
                'identify_number'  =>  '092098000912',
                'student_code'  =>  '1600001',
                'course_id'  =>  '7',
                'birthday'  =>  '1998-01-01',
                'address' => ' 18 Lô S, Chung Cư Ngô Gia Tự, Hòa Hảo, P. 2, Quận 10, TP. HCM',
                'password' => bcrypt('1'),
                'start_date'=>'2016-08-22',
                'education_type'=>'Đại học chính quy - Tín chỉ	',
                'education_level'=>'Chính quy',
                'school_name'=>'Trường Đại học Kỹ thuật - Công nghệ Cần Thơ',
            ],[
                'name' => 'Trương Công Danh Toại',
                'gender'=>'Nam',
                'avatar'=>'https://source.unsplash.com/135x180/?cat',
                'email' => 'dt@gmail.com',
                'phone_number'  =>  '0846925554',
                'identify_number'  =>  '098098098098',
                'student_code'  =>  '1600011',
                'course_id'  =>  '7',
                'birthday'  =>  '1998-01-01',
                'address'   =>'102 Lý Thường Kiệt, Quận 10, TP. HCM',
                'password' => bcrypt('1'),
                'start_date'=>'2016-08-22',
                'education_type'=>'Đại học chính quy - Tín chỉ	',
                'education_level'=>'Chính quy',
                'school_name'=>'Trường Đại học Kỹ thuật - Công nghệ Cần Thơ',
            ]
        ]);
        factory(App\Student::class,2000)->create();
    }
}
