<?php

namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labs = [
            [
                "name" => "ALab10",
            ],
            [
                "name" => "ATaller10",
            ],
            [
                "name" => "Altres",
            ],
        ];

        foreach($labs as $lab) {
            Lab::create($lab);
        }
    }
}
