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
                'email' => 'nvanh123@gmail.com',
                'phone_number'  =>  '0987654324',
                'identify_number'  =>  '092098000911',
                'student_code'  =>  '1600000',
                'birthday'  =>  '1998-01-01',
                'address' => '200 Lê Thánh Tôn, P. Bến Thành, Quận 1, TP. HCM',
                'password' => bcrypt('1'),
            ],
            [
                'name' => 'Nguyễn Hoàng Sơn Lâm',
                'gender'=>'Nữ',
                'email' => 'ttanh456@gmail.com',
                'phone_number'  =>  '0987654325',
                'identify_number'  =>  '092098000912',
                'student_code'  =>  '1600001',
                'birthday'  =>  '1998-01-01',
                'address' => ' 18 Lô S, Chung Cư Ngô Gia Tự, Hòa Hảo, P. 2, Quận 10, TP. HCM',
                'password' => bcrypt('1'),
            ],[
                'name' => 'Trương Công Danh Toại',
                'gender'=>'Nam',
                'email' => 'danhtoai@gmail.com',
                'phone_number'  =>  '0846925554',
                'identify_number'  =>  '092098000913',
                'student_code'  =>  '1600011',
                'birthday'  =>  '1998-01-01',
                'address'   =>'102 Phan Đình Phùng, Q.Ninh Kiều , TP Cần Thơ',
                'password' => bcrypt('1'),
            ]
        ]);
        factory(App\Student::class,1000)->create();
    }
}
