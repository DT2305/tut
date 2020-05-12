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
                'name' => 'Khoa học máy tính 0116',
                'year_start' => '2016',
                'faculty_id' => '1',
            ],
            [
                'name' => 'Khoa học máy tính 0117',
                'year_start' => '2017',
                'faculty_id' => '1',
            ],
            [
                'name' => 'Khoa học máy tính 0118',
                'year_start' => '2018',
                'faculty_id' => '1',
            ],

            [
                'name' => 'Hệ thống thông tin 0116',
                'year_start' => '2016',
                'faculty_id' => '3',
            ],
            [
                'name' => 'Hệ thống thông tin 0117',
                'year_start' => '2017',
                'faculty_id' => '3',
            ],
            [
                'name' => 'Hệ thống thông tin 0118',
                'year_start' => '2018',
                'faculty_id' => '3',
            ],

            [
                'name' => 'Kỹ thuật phần mềm 0116',
                'year_start' => '2016',
                'faculty_id' => '5',
            ],
            [
                'name' => 'Kỹ thuật phần mềm 0117',
                'year_start' => '2017',
                'faculty_id' => '5',
            ],
            [
                'name' => 'Kỹ thuật phần mềm 0118',
                'year_start' => '2018',
                'faculty_id' => '5',
            ],

            [
                'name' => 'Quản lý công nghiệp 0116',
                'year_start' => '2016',
                'faculty_id' => '7',
            ],
            [
                'name' => 'Quản lý công nghiệp 0117',
                'year_start' => '2017',
                'faculty_id' => '7',
            ],
            [
                'name' => 'Quản lý công nghiệp 0118',
                'year_start' => '2018',
                'faculty_id' => '7',
            ],

            [
                'name' => 'Logistics và quản lý chuỗi cung ứng 0118',
                'year_start' => '2018',
                'faculty_id' => '8',
            ],
            [
                'name' => 'Logistics và quản lý chuỗi cung ứng 0119',
                'year_start' => '2019',
                'faculty_id' => '8',
            ],

            [
                'name' => 'Quản lý xây dựng 0116',
                'year_start' => '2016',
                'faculty_id' => '9',
            ],
            [
                'name' => 'Quản lý xây dựng 0117',
                'year_start' => '2017',
                'faculty_id' => '9',
            ],
            [
                'name' => 'Quản lý xây dựng 0118',
                'year_start' => '2018',
                'faculty_id' => '9',
            ],

            [
                'name' => 'Công nghệ kỹ thuật cơ điện tử 0116',
                'year_start' => '2016',
                'faculty_id' => '12',
            ],
            [
                'name' => 'Công nghệ kỹ thuật cơ điện tử 0117',
                'year_start' => '2017',
                'faculty_id' => '12',
            ],
            [
                'name' => 'Công nghệ kỹ thuật cơ điện tử 0118',
                'year_start' => '2018',
                'faculty_id' => '12',
            ],

            [
                'name' => 'Công nghệ kỹ thuật điều khiển và tự động hóa 0116',
                'year_start' => '2016',
                'faculty_id' => '14',
            ],
            [
                'name' => 'Công nghệ kỹ thuật điều khiển và tự động hóa 0117',
                'year_start' => '2018',
                'faculty_id' => '14',
            ],
            [
                'name' => 'Công nghệ kỹ thuật điều khiển và tự động hóa 0118',
                'year_start' => '2018',
                'faculty_id' => '14',
            ],

            [

                'name' => 'Công nghệ thực phẩm 0116',
                'year_start' => '2016',
                'faculty_id' => '15',
            ],
            [

                'name' => 'Công nghệ thực phẩm 0117',
                'year_start' => '2017',
                'faculty_id' => '15',
            ],
            [

                'name' => 'Công nghệ thực phẩm 0118',
                'year_start' => '2018',
                'faculty_id' => '15',
            ],
            [

                'name' => 'Công nghệ sinh học 0116',
                'year_start' => '2016',
                'faculty_id' => '16',
            ],
            [

                'name' => 'Công nghệ sinh học 0117',
                'year_start' => '2017',
                'faculty_id' => '16',
            ],
            [

                'name' => 'Công nghệ sinh học 0118',
                'year_start' => '2018',
                'faculty_id' => '16',
            ],

        ]);
    }
}
