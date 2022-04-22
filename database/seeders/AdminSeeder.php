<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'username' => "admin",
            'email' => 'admin@gmail.com',
            //'password' => Hash::make('password'),
            'password' => md5('admin'),
        ]);
    }
}
