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
                'username' => 'admin1',
                'password' => bcrypt('1'),
                'email' => 'admin1@admin.com',
                'level'  =>  '1',

                'phone_number'=>'0987654321',
                'full_name'=>'Nguyễn Văn A',


            ],
            [
                'username' => 'admin2',
                'password' => bcrypt('1'),
                'email' => 'admin2@admin.com',
                'level'  =>  '2',

                'phone_number'=>'0987654322',
                'full_name'=>'Nguyễn Văn B',

            ],
            [
                'username' => 'admin3',
                'password' => bcrypt('1'),
                'email' => 'admin3@admin.com',
                'level'  =>  '3',

                'phone_number'=>'0987654323',
                'full_name'=>'Nguyễn Văn C',

            ]
        ]);
    }
}
