<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

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
                'name' => 'Rahmat Hidayatullah',
                'email' => 'rahmat@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Sakuranomiya',
                'email' => 'sakuranomiya@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Chika Fujiwara',
                'email' => 'chika@gmail.com',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
