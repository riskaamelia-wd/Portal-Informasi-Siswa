<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'PakGuru',
            'role'      => 'admin',
            'email'     => 'admin@camp404.com',
            'password'  => bcrypt('password123')
        ]);
        User::create([
            'nis'       => 101,
            'name'      => 'Riska Amelia',
            'role'      => 'siswa',
            'email'     => 'riska@camp404.com',
            'password'  => bcrypt('password123')
        ]);
        User::create([
            'nis'       => 102,
            'name'      => 'Amelia Riska',
            'role'      => 'siswa',
            'email'     => 'amelia@camp404.com',
            'password'  => bcrypt('password123')
        ]);
    }
}
