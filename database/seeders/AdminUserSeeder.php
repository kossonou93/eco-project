<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin-Ecocajou',
            'email' => 'admin-ecocajou@gmail.com',
            'password' => bcrypt('ecocajou'),
            'authorize' => '1',
        ]);
    }
}
