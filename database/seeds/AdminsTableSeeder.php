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
                'email' => 'rank1@admin.com',
                'rank'  =>  '1',
                'password' => bcrypt('1'),
            ],
            [
                'username' => 'admin-rank-2',
                'email' => 'rank2@admin.com',
                'rank'  =>  '2',
                'password' => bcrypt('1'),
            ],
            [
                'username' => 'admin-rank-3',
                'email' => 'rank3@admin.com',
                'rank'  =>  '3',
                'password' => bcrypt('1'),
            ]
        ]);
    }
}
