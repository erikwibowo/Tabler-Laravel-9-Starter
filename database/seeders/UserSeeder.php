<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin')
        ]);

        $user->assignRole('admin');

        $operator = User::create([
            'name'      => 'Operator',
            'email'     => 'operator@operator.com',
            'password'  => bcrypt('operator')
        ]);

        $operator->assignRole('operator');
    }
}
