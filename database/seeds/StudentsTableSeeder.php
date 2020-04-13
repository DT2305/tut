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
                'name' => 'Nguyễn Văn Anh',
                'gender'=>'Nam',
                'email' => 'nvanh123@gmail.com',
                'phone_number'  =>  '0987665445',
                'identify_number'  =>  '123321321321',
                'student_code'  =>  '1600000',
                'birthday'  =>  '1998-01-01',
                'password' => bcrypt('1'),
            ],
            [
                'name' => 'Trần Thi Anh',
                'gender'=>'Nữ',
                'email' => 'ttanh456@gmail.com',
                'phone_number'  =>  '0987654321',
                'identify_number'  =>  '456456456456',
                'student_code'  =>  '1600001',
                'birthday'  =>  '1998-01-01',
                'password' => bcrypt('1'),
            ],[
                'name' => 'Trương Công Danh Toại',
                'gender'=>'Nam',
                'email' => 'danhtoai@gmail.com',
                'phone_number'  =>  '0846925554',
                'identify_number'  =>  '098098098098',
                'student_code'  =>  '1600011',
                'birthday'  =>  '1998-01-01',
                'password' => bcrypt('1'),
            ]
        ]);
        factory(App\Student::class,2000)->create();
    }
}
