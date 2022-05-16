<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'kajur',
                'email' => 'kajur@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'kajur'
            ]
        ]);
        DB::table('users')->insert([
            [
                'name' => 'guru',
                'email' => 'guru@gmail.com',
                'password' =>  bcrypt('password'),
                'role' => 'guru'
            ]
        ]);
    }
}