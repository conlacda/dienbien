<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedArray = [
            'name' => 'Admin',
            'email' => 'dienbien@gmail.com',
            'password' => Hash::make('dienbien@gmail.com'),
            'role' => 'admin'
        ];
        foreach ($seedArray as $seed) {
            DB::table('introductions')->insert($seed);
        }
    }
}
