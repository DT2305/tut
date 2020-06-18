<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['id' => '1', 'department_code' => '10000', 'name' => 'Không thuộc khoa nào'],
            ['id' => '2', 'department_code' => '10001', 'name' => 'Khoa công nghệ thông tin'],
            ['id' => '3', 'department_code' => '10002', 'name' => 'Khoa điện - điện tử - viễn thông'],
            ['id' => '4', 'department_code' => '10003', 'name' => 'Khoa Quản lý công nghiệp'],
            ['id' => '5', 'department_code' => '10004', 'name' => 'Khoa Công nghệ Thực phẩm và công nghệ sinh học'],
            ['id' => '6', 'department_code' => '10005', 'name' => 'Khoa Kỹ thuật cơ khí'],
            ['id' => '7', 'department_code' => '10006', 'name' => 'Khoa Kỹ thuật xây dựng'],
            ['id' => '8', 'department_code' => '10007', 'name' => 'Khoa khoa học cơ bản'],
            ['id' => '9', 'department_code' => '10008', 'name' => 'Trung tâm ngoại ngữ'],
            ['id' => '10', 'department_code' => '10009', 'name' => 'Trung tâm Công nghệ Thông tin'],
            ['id' => '11', 'department_code' => '10010', 'name' => 'Trung tâm bồi dưỡng và chuyển giao công nghệ'],
        ]);
    }
}
