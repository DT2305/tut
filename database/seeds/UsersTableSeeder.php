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
                'gender' => 'Nam',
                'email' => 'nvanh123@gmail.com',
                'phone_number' => '0987654321',
                'identity_number' => '092098000812',
                'birthday' => '1998-01-01',
                'password' => bcrypt('1'),
                'address' => '200 Lê Thánh Tôn, P. Bến Thành, Quận 1, TP. HCM',
            ],
            [
                'name' => 'Trần Anh Dũng',
                'gender' => 'Nam',
                'email' => 'ttanh456@gmail.com',
                'phone_number' => '0987654322',
                'identity_number' => '092098000811',
                'birthday' => '1998-01-01',
                'password' => bcrypt('1'),
                'address' => ' 18 Lô S, Chung Cư Ngô Gia Tự, Hòa Hảo, P. 2, Quận 10, TP. HCM',
            ], [
                'name' => 'Nguyễn Anh Thy',
                'gender' => 'Nam',
                'email' => 'nathi@gmail.com',
                'phone_number' => '09876543213',
                'identity_number' => '092098000913',
                'birthday' => '1998-01-01',
                'password' => bcrypt('1'),
                'address' => '19 Chung Cư Ngô Gia Tự, Hòa Hảo, P. 2, Quận 10, TP. HCM',
            ]
        ]);
        factory(App\User::class, 1000)->create();
    }
}
