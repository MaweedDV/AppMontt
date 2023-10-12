<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $image_path = asset('media/profile-photos/default_image.png');
        $solved_path = str_replace('http://localhost:8000/', '', $image_path);

        User::create([
            'first_name' => 'Manuel',
            'last_name' => 'Gallardo',
            'email' => 'mgallardo@ejemplo.cl',
            'rut' => '12345678-9',
            'profile_photo_path' => $solved_path,
            'department_id' => 1,
            'role' => 'admin',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'first_name' => 'Felipe',
            'last_name' => 'Almonacid',
            'email' => 'felipe@mail.cl',
            'rut' => '19413477-0',
            'profile_photo_path' => $solved_path,
            'department_id' => 1,
            'role' => 'admin',
            'password' => bcrypt('123456789')
        ]);
    }
}
