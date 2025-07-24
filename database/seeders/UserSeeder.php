<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'Test',
                'email' => 'test@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'created_at' => now()
            ],
        ]);

        $users->each(function ($user){
            User::insert($user);
        });
    }
}
