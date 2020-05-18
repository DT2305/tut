<?php

use Illuminate\Database\Seeder;

class SubjectCombinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_combinations')->insert([
            ['name' => '(A00) Toán, Vật Lý, Hóa Học'],
            ['name' => '(A01) Toán, Vật Lý, Tiếng Anh'],
            ['name' => '(A02) Toán, Vật lí, Sinh học'],
            ['name' => "(B00) Toán, Hóa Học, Sinh Học"],
            ['name' => '(C01) Toán, Vật lí, Ngữ văn'],
            ['name' => '(C02) Toán, Hóa học, Ngữ văn'],
            ['name' => '(D01) Toán, Tiếng Anh, Ngữ Văn'],
        ]);
    }
}
