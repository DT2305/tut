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
            ['id' => '1','name' => 'Khoa công nghệ thông tin'],
            ['id' => '2','name' => 'Khoa điện - điện tử - viễn thông'],
            ['id' => '3','name' => 'Khoa Quản lý công nghiệp'],
            ['id' => '4','name' => 'Khoa Công nghệ Thực phẩm và công nghệ sinh học'],
            ['id' => '5','name' => 'Khoa Kỹ thuật cơ khí'],
            ['id' => '6','name' => 'Khoa Kỹ thuật xây dựng'],
            ['id' => '7','name' => 'Khoa khoa học cơ bản'],
            ['id' => '8','name' => 'Trung tâm ngoại ngữ'],
            ['id' => '9','name' => 'Trung tâm Công nghệ Thông tin'],
            ['id' => '10','name' => 'Trung tâm bồi dưỡng và chuyển giao công nghệ'],
            ['id' => '11','name' => 'Không thuộc khoa'],
        ]);
    }
}
