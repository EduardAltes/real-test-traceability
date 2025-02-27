<?php

namespace Database\Seeders;

use App\Models\Citology\CitologySampleType;
use App\Models\Citology\CitologySampleTypeGroup;
use Illuminate\Database\Seeder;

class CitologySampleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $tinctions = [
            [
                "name" => "Triple presa CV",
                "group_name" => "Ginecològica"
            ],
            [
                "name" => "Vaginal simple",
                "group_name" => "Ginecològica"
            ],
            [
                "name" => "Endometrial",
                "group_name" => "Ginecològica"
            ],
            [
                "name" => "Líquid pleural",
                "group_name" => "General"
            ],
            [
                "name" => "Líquid ascític",
                "group_name" => "General"
            ],
            [
                "name" => "Líquid sinovial",
                "group_name" => "General"
            ],
            [
                "name" => "Líquid cèfalo-raquidi",
                "group_name" => "General"
            ],
            [
                "name" => "Orina",
                "group_name" => "General"
            ],
            [
                "name" => "Orina instrumentalitzada",
                "group_name" => "General"
            ],
            [
                "name" => "Esput",
                "group_name" => "General"
            ],
            [
                "name" => "BAS",
                "group_name" => "General"
            ],
            [
                "name" => "BAL",
                "group_name" => "General"
            ],
            [
                "name" => "Raspallat bronquial",
                "group_name" => "General"
            ],
            [
                "name" => "Secreció mama",
                "group_name" => "General"
            ],
            [
                "name" => "PAAF mama",
                "group_name" => "PAAF"
            ],
            [
                "name" => "PAAF pulmó",
                "group_name" => "PAAF"
            ],
            [
                "name" => "PAAF fetge",
                "group_name" => "PAAF"
            ],
            [
                "name" => "PAAF gangli limfàtic",
                "group_name" => "PAAF"
            ],
            [
                "name" => "PAAF glàndula salival",
                "group_name" => "PAAF"
            ],
            [
                "name" => "PAAF tiroide",
                "group_name" => "PAAF"
            ],
            [
                "name" => "PAAF pàncrees",
                "group_name" => "PAAF"
            ],
            [
                "name" => "PAAF parts toves",
                "group_name" => "PAAF"
            ],
            [
                "name" => "Raspallat bucal",
                "group_name" => "PAAF"
            ],
            [
                "name" => "Secreció nasal",
                "group_name" => "PAAF"
            ],
            [
                "name" => "Emprenta teixit",
                "group_name" => "PAAF"
            ],

        ];

        foreach($tinctions as $tinction) {
            $tinction["citology_sample_type_group_id"] = CitologySampleTypeGroup::where('name', $tinction["group_name"])->first()->id;
            unset($tinction["group_name"]);
            CitologySampleType::create($tinction);
        }
    }
}
