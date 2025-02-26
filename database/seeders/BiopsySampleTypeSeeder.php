<?php

namespace Database\Seeders;

use App\Models\Biopsy\BiopsySample;
use App\Models\Biopsy\BiopsySampleType;
use App\Models\Biopsy\BiopsySampleTypeGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiopsySampleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampleTypes = [
            ["name" => "Anus", "test_type" => "Endoscòpica"],
            ["name" => "Arteria aorta", "test_type" => "Incisional"],
            ["name" => "Bronquial", "test_type" => "Endoscòpica"],
            ["name" => "Cervell", "test_type" => "Incisional"],
            ["name" => "Cèrvix", "test_type" => "Excisional"],
            ["name" => "Còlon", "test_type" => "Endoscòpica"],
            ["name" => "Cor", "test_type" => "Incisional"],
            ["name" => "Duodè", "test_type" => "Endoscòpica"],
            ["name" => "Esòfag", "test_type" => "Endoscòpica"],
            ["name" => "Estómac", "test_type" => "Endoscòpica"],
            ["name" => "Fetge", "test_type" => "Incisional"],
            ["name" => "Gangli limfàtic", "test_type" => "Excisional"],
            ["name" => "Gàstrica", "test_type" => "Endoscòpica"],
            ["name" => "Glàndula supararrenal", "test_type" => "Incisional"],
            ["name" => "Intestí gros", "test_type" => "Endoscòpica"],
            ["name" => "Intestí prim", "test_type" => "Endoscòpica"],
            ["name" => "Laringe", "test_type" => "Endoscòpica"],
            ["name" => "Llengua", "test_type" => "Excisional"],
            ["name" => "Mama", "test_type" => "Excisional"],
            ["name" => "Melsa", "test_type" => "Incisional"],
            ["name" => "Moll de l'òs", "test_type" => "Incisional"],
            ["name" => "Múscul", "test_type" => "Incisional"],
            ["name" => "Os", "test_type" => "Incisional"],
            ["name" => "Ovari", "test_type" => "Peça quirúrgica"],
            ["name" => "Pàncrees", "test_type" => "Incisional"],
            ["name" => "Parts toves", "test_type" => "Excisional"],
            ["name" => "Pell", "test_type" => "Excisional"],
            ["name" => "Pulmó", "test_type" => "Endoscòpica"],
            ["name" => "Recte", "test_type" => "Endoscòpica"],
            ["name" => "Ronyó", "test_type" => "Peça quirúrgica"],
            ["name" => "Teixit cel·lular subcutani", "test_type" => "Bloc cel·lular"],
            ["name" => "Testicle", "test_type" => "Peça quirúrgica"],
            ["name" => "Tràquea", "test_type" => "Endoscòpica"],
            ["name" => "Trompa Uterina", "test_type" => "Peça quirúrgica"],
            ["name" => "Ull", "test_type" => "Peça quirúrgica"],
            ["name" => "Úter", "test_type" => "Peça quirúrgica"]
        ];

        foreach($sampleTypes as $sampleType) {
            $sampleType["name"] = BiopsySampleTypeGroup::where('name', $sampleType["test_type"])->first()->id;
            BiopsySampleType::create($sampleType);
        }
        
    }
}
