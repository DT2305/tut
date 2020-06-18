<?php

use Illuminate\Database\Seeder;

class EducationTypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_types')->insert([
            [
                'id'=>'1',
                'edu_type_code' => 'T1',
                'name' => 'Không có',
            ],
            [
                'id'=>'2',
                'edu_type_code' => 'T2',
                'name' => 'Chính quy - Tín chỉ',
            ],
            [
                'id'=>'3',
                'edu_type_code' => 'T3',
                'name' => 'Cử tuyển',
            ],
            [
                'id'=>'4',
                'edu_type_code' => 'T4',
                'name' => 'Đào tạo văn bằng 2',
            ],
            [
                'id'=>'5',
                'edu_type_code' => 'T5',
                'name' => 'Đào tạo liên thông',
            ],
            [
                'id'=>'6',
                'edu_type_code' => 'T6',
                'name' => 'Đào tạo thông thường',
            ],
            [
                'id'=>'7',
                'edu_type_code' => 'T7',
                'name' => 'Vừa làm - Vừa học',
            ],
            [
                'id'=>'8',
                'edu_type_code' => 'T8',
                'name' => 'Đào tạo từ xa',
            ],
        ]);
    }
}
