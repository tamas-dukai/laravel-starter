<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_id'  => '1',
            'name'  => 'Tamas',
            'username'  => 'Tamas',
            'email'  => 'dtommy79@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('12341234'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'role_id'  => '1',
            'name'  => 'Mark',
            'username'  => 'Mark',
            'email'  => 'marklengyel87@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('12341234'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name'  => 'defuser',
            'username'  => 'defuser',
            'email'  => 'defuser@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('12341234'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);
    }
}
