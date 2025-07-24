<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\Purchase;
use App\Models\User;
use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        ]);

        $admin = User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'username' => 'test'
        ]);

    }
}
