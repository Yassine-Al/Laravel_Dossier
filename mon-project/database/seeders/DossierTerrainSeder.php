<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DossierTerrainSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dossier__terrains')->insert([
            [
                'date_Ouverture' => '2023-01-02',
                'date_Cloture' => '2024-06-11',
                'numter' => 1,
                'numnotaire' => 1,
                'etat' => 'traite'
            ],
            [
                'date_Ouverture' => '2023-01-02',
                'date_Cloture' => '2024-06-11',
                'numter' => 1,
                'numnotaire' => 1,
                'etat' => 'nontraite'
            ]
        ]);
    }
}
