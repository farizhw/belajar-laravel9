<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin123')
        ]);
        User::create([
            'nis'       => '101',
            'name'      => 'Aceng',
            'role'      => 'siswa',
            'email'     => 'aceng.sw@siswa.com',
            'password'  => bcrypt('aceng123')
        ]);
        User::create([
            'nis'       => '102',
            'name'      => 'Agus',
            'role'      => 'siswa',
            'email'     => 'agus.sw@siswa.com',
            'password'  => bcrypt('agus123')
        ]);
    }
}
