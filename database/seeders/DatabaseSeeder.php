<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            BiopsySampleTypeGroupSeeder::class,
            BiopsySampleTypeSeeder::class,
            CitologySampleTypeGroupSeeder::class,
            CitologySampleTypeSeeder::class,
            LabsSeeder::class,
            TinctionSeeder::class,
            CitologyProcedureSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
