<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Mas admin',
                'email'=> 'admin@gmail.com',
                'role'=> 'admin',
                'password'=> bcrypt('admin'),
            ],
            [
                'name'=>'Mas pimpinan',
                'email'=> 'pimpinan@gmail.com',
                'role'=> '[pimpinan]',
                'password'=> bcrypt('pimpinan'),
            ],
            [
                'name'=>'Mas karyawan',
                'email'=> 'karyawan@gmail.com',
                'role'=> 'karyawan',
                'password'=> bcrypt('karyawan'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
