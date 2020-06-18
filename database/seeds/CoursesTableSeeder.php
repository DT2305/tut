<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'name' => 'Không thuộc lớp nào',
                'course_code' => 'K0',
                'year_start' => '2016',
                'faculty_id' => '1',
            ],
            [
                'name' => 'Khoa học máy tính 0116',
                'course_code' => 'KHMT0116',
                'year_start' => '2016',
                'faculty_id' => '2',
            ],
            [
                'name' => 'Khoa học máy tính 0117',
                'course_code' => 'KHMT0117',
                'year_start' => '2017',
                'faculty_id' => '2',
            ],
            [
                'name' => 'Khoa học máy tính 0118',
                'course_code' => 'KHMT0118',
                'year_start' => '2018',
                'faculty_id' => '2',
            ],

            [
                'name' => 'Hệ thống thông tin 0116',
                'course_code' => 'HTTT0116',
                'year_start' => '2016',
                'faculty_id' => '4',
            ],
            [
                'name' => 'Hệ thống thông tin 0117',
                'course_code' => 'HTTT0117',
                'year_start' => '2017',
                'faculty_id' => '4',
            ],
            [
                'name' => 'Hệ thống thông tin 0118',
                'course_code' => 'HTTT0118',
                'year_start' => '2018',
                'faculty_id' => '4',
            ],

            [
                'name' => 'Kỹ thuật phần mềm 0116',
                'course_code' => 'KTPM0116',
                'year_start' => '2016',
                'faculty_id' => '6',
            ],
            [
                'name' => 'Kỹ thuật phần mềm 0117',
                'course_code' => 'KTPM0117',
                'year_start' => '2017',
                'faculty_id' => '6',
            ],
            [
                'name' => 'Kỹ thuật phần mềm 0118',
                'course_code' => 'KTPM0118',
                'year_start' => '2018',
                'faculty_id' => '6',
            ],

            [
                'name' => 'Quản lý công nghiệp 0116',
                'course_code' => 'QLCN0116',
                'year_start' => '2016',
                'faculty_id' => '8',
            ],
            [
                'name' => 'Quản lý công nghiệp 0117',
                'course_code' => 'QLCN0117',
                'year_start' => '2017',
                'faculty_id' => '8',
            ],
            [
                'name' => 'Quản lý công nghiệp 0118',
                'course_code' => 'QLCN0118',
                'year_start' => '2018',
                'faculty_id' => '8',
            ],

            [
                'name' => 'Logistics và quản lý chuỗi cung ứng 0118',
                'course_code' => 'L&QLCCW0118',
                'year_start' => '2018',
                'faculty_id' => '9',
            ],
            [
                'name' => 'Logistics và quản lý chuỗi cung ứng 0119',
                'course_code' => 'L&QLCCW0119',
                'year_start' => '2019',
                'faculty_id' => '9',
            ],

            [
                'name' => 'Quản lý xây dựng 0116',
                'course_code' => 'QLXD0116',
                'year_start' => '2016',
                'faculty_id' => '10',
            ],
            [
                'name' => 'Quản lý xây dựng 0117',
                'course_code' => 'QLXD0117',
                'year_start' => '2017',
                'faculty_id' => '10',
            ],
            [
                'name' => 'Quản lý xây dựng 0118',
                'course_code' => 'QLXD0118',
                'year_start' => '2018',
                'faculty_id' => '10',
            ],

            [
                'name' => 'Công nghệ kỹ thuật cơ điện tử 0116',
                'course_code' => 'CNKTCDT0116',
                'year_start' => '2016',
                'faculty_id' => '13',
            ],
            [
                'name' => 'Công nghệ kỹ thuật cơ điện tử 0117',
                'course_code' => 'CNKTCDT0117',
                'year_start' => '2017',
                'faculty_id' => '13',
            ],
            [
                'name' => 'Công nghệ kỹ thuật cơ điện tử 0118',
                'course_code' => 'CNKTCDT0118',
                'year_start' => '2018',
                'faculty_id' => '13',
            ],

            [
                'name' => 'Công nghệ kỹ thuật điều khiển và tự động hóa 0116',
                'course_code' => 'CNKTDK&TDH0116',
                'year_start' => '2016',
                'faculty_id' => '15',
            ],
            [
                'name' => 'Công nghệ kỹ thuật điều khiển và tự động hóa 0117',
                'course_code' => 'CNKTDK&TDH0117',
                'year_start' => '2018',
                'faculty_id' => '15',
            ],
            [
                'name' => 'Công nghệ kỹ thuật điều khiển và tự động hóa 0118',
                'course_code' => 'CNKTDK&TDH0118',
                'year_start' => '2018',
                'faculty_id' => '15',
            ],

            [

                'name' => 'Công nghệ thực phẩm 0116',
                'course_code' => 'CNTP0116',
                'year_start' => '2016',
                'faculty_id' => '16',
            ],
            [

                'name' => 'Công nghệ thực phẩm 0117',
                'course_code' => 'CNTP0117',
                'year_start' => '2017',
                'faculty_id' => '16',
            ],
            [

                'name' => 'Công nghệ thực phẩm 0118',
                'course_code' => 'CNTP0118',
                'year_start' => '2018',
                'faculty_id' => '16',
            ],
            [

                'name' => 'Công nghệ sinh học 0116',
                'course_code' => 'CNSH0116',
                'year_start' => '2016',
                'faculty_id' => '17',
            ],
            [

                'name' => 'Công nghệ sinh học 0117',
                'course_code' => 'CNSH0117',
                'year_start' => '2017',
                'faculty_id' => '17',
            ],
            [

                'name' => 'Công nghệ sinh học 0118',
                'course_code' => 'CNSH0118',
                'year_start' => '2018',
                'faculty_id' => '17',
            ],

        ]);
    }
}
