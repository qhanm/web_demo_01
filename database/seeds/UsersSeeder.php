<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'id' => 1,
                'role_id' => 1,
                'username' => 'superadmin',
                'email' => 'qhnam.67@gmail.com',
                'password' => Hash::make('nam631996'),
                'full_name' => 'Quach Hoai Nam',
                'phone' => '0965586696',
                'address' => 'Quan 4, HCM',
                'status' => 5,
                'security_stamp' => Str::random(60)
            ],
            [
                'id' => 2,
                'role_id' => 2,
                'username' => 'user_test_01',
                'email' => 'user_test_01.67@gmail.com',
                'password' => Hash::make('nam631996'),
                'full_name' => 'Quach Hoai Nam',
                'phone' => '0965586696',
                'address' => 'Quan 4, HCM',
                'status' => 5,
                'security_stamp' => Str::random(60)
            ],
            [
                'id' => 3,
                'role_id' => 2,
                'username' => 'user_test_02',
                'email' => 'user_test_02.67@gmail.com',
                'password' => Hash::make('nam631996'),
                'full_name' => 'Quach Hoai Nam',
                'phone' => '0965586696',
                'address' => 'Quan 4, HCM',
                'status' => 5,
                'security_stamp' => Str::random(60)
            ]
        ]);

        DB::table('role')->insert([
            [
                'id' => 1,
                'name' => 'superadmin',
                'description' => 'this is super admin'
            ],
            [
                'id' => 2,
                'name' => 'customer',
                'description' => 'this is customer'
            ]
        ]);
    }
}
