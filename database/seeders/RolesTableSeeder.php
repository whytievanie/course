<?php
declare(strict_types = 1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::insert([
           'role'=> 'admin',
        ]);

        \App\Models\Role::insert([
            'role'=> 'teacher',
        ]);

        \App\Models\Role::insert([
            'role'=> 'student',
        ]);
    }
}
