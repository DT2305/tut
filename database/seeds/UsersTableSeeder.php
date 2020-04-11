<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Nguyễn Văn Anh',
                'email' => 'nvanh123@gmail.com',
                'phone_number'  =>  '0987654321',
                'identify_number'  =>  '123123123123',
                'birthday'  =>  '1998-01-01',
                'password' => bcrypt('1'),
            ],
            [
                'name' => 'Trần Thi Anh',
                'email' => 'ttanh456@gmail.com',
                'phone_number'  =>  '0987654322',
                'identify_number'  =>  '456456456456',
                'birthday'  =>  '1998-01-01',
                'password' => bcrypt('1'),
            ],[
                'name' => 'Trương Công Danh Toại',
                'email' => 'danhtoai@gmail.com',
                'phone_number'  =>  '0846925554',
                'identify_number'  =>  '098098098098',
                'birthday'  =>  '1998-01-01',
                'password' => bcrypt('1'),
            ]
        ]);
        factory(App\User::class,1000)->create();
    }
}
