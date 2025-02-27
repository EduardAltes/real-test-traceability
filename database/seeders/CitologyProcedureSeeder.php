<?php

namespace Database\Seeders;

use App\Models\Citology\CitologyProcedure;
use Illuminate\Database\Seeder;

class CitologyProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $procedures = [
            [
                "name" => "Extensió material",
            ],
            [
                "name" => "Citocentrifugat",
            ],
            [
                "name" => "Citologia líquida",
            ],   
            [
                "name" => "Rentat d'agulla",
            ],
            [
                "name" => "Bloc cel·lular",
            ],
            [
                "name" => "Thin prep",
            ],      
            
        ];

        foreach($procedures as $data) {
            CitologyProcedure::create($data);
        }
        
    }
}
