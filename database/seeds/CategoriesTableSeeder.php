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
                'name' => 'Sự kiện',
                'status' => '1',
            ],
            [
                'name' => 'Cơ hội việc làm',
                'status' => '1',
            ],
            [
                'name' => 'Tuyển sinh',
                'status' => '1',
            ],
            [
                'name' => 'Hoạt động',
                'status' => '1',
            ],
            [
                'name' => 'Liên kết',
                'status' => '1',
            ],
        ]);
    }
}
