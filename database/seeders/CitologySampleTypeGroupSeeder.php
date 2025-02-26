<?php

namespace Database\Seeders;

use App\Models\Citology\CitologySampleTypeGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitologySampleTypeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tinctions = [
            [
                "name" => "Ginecològica",
            ],
            [
                "name" => "General",
            ],
            [
                "name" => "PAAF",
            ],           
        ];

        foreach($tinctions as $tinction) {
            CitologySampleTypeGroup::create($tinction);
        }
    }
}
