<?php

namespace Database\Seeders;

use App\Models\district_school;
use App\Models\DistrictSchool;
use App\Models\Order;
use App\Models\Product;
use App\Models\School;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // School::factory(20)->create();
        // Product::factory(15)->create();
        // Order::factory(20)->create();
        DistrictSchool::factory(5)->create();



    }
}
