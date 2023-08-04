<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'su su',
            'email'=>'susu@gmail.com',
            'phone'=>'0934423456',
            'address'=>'yangon',
            'role'=>'user',
            'gender'=>'female',
            'password'=>Hash::make('susu12345'),

            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'phone'=>'092363263',
            'address'=>'yangon',
            'role'=>'user',
            'gender'=>'female',
            'password'=>Hash::make('admin123')
        ]);
    }
}
