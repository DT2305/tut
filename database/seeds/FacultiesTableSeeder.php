<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            [
                'id' => '1',
                'name' => 'Không thuộc ngành nào',
                'faculty_code' => '0000000',
                'department_id' => '1',
            ],
            [
                'id' => '2',
                'name' => 'Khoa học máy tính',
                'faculty_code' => '7480101',
                'department_id' => '2',
            ],
            [
                'id' => '3',
                'name' => 'Khoa học dữ liệu',
                'faculty_code' => '7480109',
                'department_id' => '1',
            ],
            [
                'id' => '4',
                'name' => 'Hệ thống thông tin',
                'faculty_code' => '7480104',
                'department_id' => '2',
            ],
            [
                'id' => '5',
                'name' => 'Công nghệ thông tin',
                'faculty_code' => '7480201',
                'department_id' => '2',
            ],
            [
                'id' => '6',
                'name' => 'Kỹ thuật phần mềm',
                'faculty_code' => '7480103',
                'department_id' => '2',
            ],
            [
                'id' => '7',
                'name' => 'Kỹ thuật hệ thống công nghiệp',
                'faculty_code' => '7520118',
                'department_id' => '4',
            ],
            [
                'id' => '8',
                'name' => 'Quản lý công nghiệp',
                'faculty_code' => '7510601',
                'department_id' => '4',
            ],
            [
                'id' => '9',
                'name' => 'Logistics và quản lý chuỗi cung ứng',
                'faculty_code' => '7510605',
                'department_id' => '4',
            ],
            [
                'id' => '10',
                'name' => 'Quản lý xây dựng',
                'faculty_code' => '7580302',
                'department_id' => '7',
            ],
            [
                'id' => '11',
                'name' => 'Công nghệ kỹ thuật công trình xây dựng',
                'faculty_code' => '7510102',
                'department_id' => '7',
            ],
            [
                'id' => '12',
                'name' => 'Công nghệ kỹ thuật năng lượng',
                'faculty_code' => '7510403',
                'department_id' => '1',
            ],
            [
                'id' => '13',
                'name' => 'Công nghệ kỹ thuật cơ điện tử',
                'faculty_code' => '7510203',
                'department_id' => '6',
            ],
            [
                'id' => '14',
                'name' => 'Công nghệ kỹ thuật điện, điện tử',
                'faculty_code' => '7510301',
                'department_id' => '3',
            ],
            [
                'id' => '15',
                'name' => 'Công nghệ kỹ thuật điều khiển và tự động hóa',
                'faculty_code' => '7510303',
                'department_id' => '3',
            ],
            [
                'id' => '16',
                'name' => 'Công nghệ thực phẩm',
                'faculty_code' => '7510101',
                'department_id' => '5',
            ],
            [
                'id' => '17',
                'name' => 'Công nghệ sinh học',
                'faculty_code' => '7510201',
                'department_id' => '5',
            ],


        ]);
    }
}
