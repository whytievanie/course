<?php
declare(strict_types = 1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'email'=> 'admin@curio.nl',
            'name'=> 'admin',
            'password' => Hash::make('course1234'),
            'role_id'    => 1,
        ]);

        \App\Models\User::insert([
            'email'=> 'teacher@curio.nl',
            'name'=> 'teacher',
            'password' => Hash::make('course1234'),
            'role_id'    => 2,
        ]);

        \App\Models\User::insert([
            'email'=> 'esma_yilmaz7@edu.curio.nl',
            'name'=> 'Esma Yilmaz',
            'password' => Hash::make('course1234'),
            'role_id'    => 3,
        ]);
    }
}
