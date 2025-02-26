<?php

namespace Database\Seeders;

use App\Models\Biopsy\BiopsySampleTypeGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiopsySampleTypeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tinctions = [
            [
                "name" => "Endoscòpica",
            ],
            [
                "name" => "Incisional",
            ],
            [
                "name" => "Peça quirúrgica",
            ],
            [
                "name" => "Bloc cel·lular",
            ],
        ];

        foreach($tinctions as $tinction) {
            BiopsySampleTypeGroup::create($tinction);
        }
    }
}
