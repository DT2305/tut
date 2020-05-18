<?php

use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([

            [
                "id"=> "1",
                "name"=> "Không"
            ],
            [
                "id"=> "2",
                "name"=> "Phật giáo"
            ],
            [
                "id"=> "3",
                "name"=> "Công giáo"
            ],
            [
                "id"=> "4",
                "name"=> "Phật giáo Hoà Hảo"
            ],
            [
                "id"=> "5",
                "name"=> "Hồi giáo"
            ],
            [
                "id"=> "6",
                "name"=> "Cao Đài"
            ],
            [
                "id"=> "7",
                "name"=> "Minh sư đạo"
            ],
            [
                "id"=> "8",
                "name"=> "Minh Lý đạo"
            ],
            [
                "id"=> "9",
                "name"=> "Tin Lành"
            ],
            [
                "id"=> "10",
                "name"=> "Tịnh độ cư sĩ Phật hội Việt Nam"
            ],
            [
                "id"=> "11",
                "name"=> "Đạo Tứ ấn hiếu nghĩa"
            ],
            [
                "id"=> "12",
                "name"=> "Bửu sơn Kỳ hương"
            ],
            [
                "id"=> "13",
                "name"=> "Ba Ha'i"
            ],
            [
                "id"=> "14",
                "name"=> "Tôn giáo khác"
            ]
        ]);
    }
}
