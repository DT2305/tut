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
                'name' => 'Không có',
            ],[
                'id'=>'2',
                'name' => 'Chính quy - Tín chỉ',
            ],[
                'id'=>'3',
                'name' => 'Cử tuyển',
            ],[
                'id'=>'4',
                'name' => 'Đào tạo văn bằng 2',
            ],[
                'id'=>'5',
                'name' => 'Đào tạo liên thông',
            ],[
                'id'=>'6',
                'name' => 'Đào tạo thông thường',
            ],
        ]);
    }
}
