<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'username' => 'admin-rank-1',
                'password' => bcrypt('1'),
                'email' => 'rank1@admin.com',
                'rank'  =>  '1',

                'phone_number'=>'0987654321',
                'full_name'=>'Nguyễn Văn A',


            ],
            [
                'username' => 'admin-rank-2',
                'password' => bcrypt('1'),
                'email' => 'rank2@admin.com',
                'rank'  =>  '2',

                'phone_number'=>'0987654322',
                'full_name'=>'Nguyễn Văn B',

            ],
            [
                'username' => 'admin-rank-3',
                'password' => bcrypt('1'),
                'email' => 'rank3@admin.com',
                'rank'  =>  '3',

                'phone_number'=>'0987654323',
                'full_name'=>'Nguyễn Văn C',

            ]
        ]);
    }
}
