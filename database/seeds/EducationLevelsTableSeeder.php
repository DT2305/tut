<?php

use Illuminate\Database\Seeder;

class EducationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_levels')->insert([
            [
                'id'=>'1',
                'edu_level_code' => 'L1',
                'name' => 'Không có',
            ],
            [
                'id'=>'2',
                'edu_level_code' => 'L2',
                'name' => 'Đại học chính quy - Tín chỉ',
            ],
        ]);
    }
}
