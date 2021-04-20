<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name' => 'Vhanz Lulz',
                'username' => 'qq',
                'email' => 'vhanz@qq.com',
                'email_verified_at' => now(),
                'password' => bcrypt('rahasiakita'),
                'password_confirmation' => bcrypt('rahasiakita'),
            ]
        ]);
    }
}
