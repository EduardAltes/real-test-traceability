<?php

namespace Database\Seeders;

use App\Models\Tinction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TinctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tinctions = [
            [
                "name" => "Papanicolaou",
            ],
            [
                "name" => "Diff-Quick",
            ],
            [
                "name" => "Giemsa",
            ],
            [
                "name" => "PAS",
            ],
            [
                "name" => "Metenamina-plata",
            ],
            [
                "name" => "Hematoxilina-eosina",
            ],
            [
                "name" => "Roig Congo",
            ],
            [
                "name" => "Blau Alcian",
            ],
            [
                "name" => "Tricròmic de Masson",
            ],
            [
                "name" => "Reticulina",
            ],
            [
                "name" => "Orceina",
            ],
            [
                "name" => "Oil Red-0",
            ],
            [
                "name" => "Gordon and Sweets",
            ],
            [
                "name" => "Ziehl-Neelsen",
            ],
            [
                "name" => "Gram",
            ],
        ];

        foreach($tinctions as $tinction) {
            Tinction::create($tinction);
        }
    }
}
