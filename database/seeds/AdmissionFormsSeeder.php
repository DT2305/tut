<?php

use Illuminate\Database\Seeder;

class AdmissionFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admission_forms')->insert([
            [
                'id'=>'1',
                'admission_code'=>'ASS1',
                'name' => 'Xét tuyển sử dụng kết quả THPT lớp 10,11 và học kỳ 1 lớp 12',
            ],
            [
                'id'=>'2',
                'admission_code'=>'ASS2',
                'name' => 'Xét tuyển dử dụng kết quả học bà THPT lớp 12',
            ],
            [
                'id'=>'3',
                'admission_code'=>'ASS3',
                'name' => 'Kết quả thi THPT 2020',
            ],
            [
                'id'=>'4',
                'admission_code'=>'ASS4',
                'name' => 'Kết quả kỳ thi đáng giá năng lực của ĐHQG-TP.HCM',
            ],
            [
                'id'=>'5',
                'admission_code'=>'ASS5',
                'name' => 'Xét tuyển thẳng',
            ],
        ]);
    }
}
