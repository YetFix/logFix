<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'=>1,
            'name'=>'Kawsar',
            'username'=>'kawsarG',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
            'image'=>'default.png',
            'about'=>'Admin'
        ]);
        User::create([
            'role_id'=>2,
            'name'=>'Farhana',
            'username'=>'faru',
            'email'=>'author@gmail.com',
            'password'=>Hash::make('12345678'),
            'image'=>'default.png',
            'about'=>'Author'
        ]);
    }
}
