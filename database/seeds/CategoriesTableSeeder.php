<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'cate_name' => 'Tin tức',
                'status' => '1',
                'target' => '1',
            ],
            [
                'cate_name' => 'Cơ hội việc làm',
                'status' => '1',
                'target' => '1',
            ],
            [
                'cate_name' => 'Tuyển sinh',
                'status' => '1',
                'target' => '1',
            ],
            [
                'cate_name' => 'Ngành học',
                'status' => '1',
                'target' => '1',
            ],
            [
                'cate_name' => 'Sự kiện',
                'status' => '1',
                'target' => '1',
            ],
            [
                'cate_name' => 'Tin tức',
                'status' => '1',
                'target' => '2',
            ],
            [
                'cate_name' => 'Cơ hội việc làm',
                'status' => '1',
                'target' => '2',
            ],
            [
                'cate_name' => 'Tuyển sinh',
                'status' => '1',
                'target' => '2',
            ],
            [
                'cate_name' => 'Văn nghệ',
                'status' => '1',
                'target' => '2',
            ],
            [
                'cate_name' => 'Thể thao',
                'status' => '1',
                'target' => '2',
            ],
            [
                'cate_name' => 'Sự kiện',
                'status' => '1',
                'target' => '2',
            ],


        ]);
    }
}
