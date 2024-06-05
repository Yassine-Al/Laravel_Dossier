<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'idE' => 1,
                'idF' => 1,
                'points' => 20
            ],
            [
                'idE' => 1,
                'idF' => 2,
                'points' => 22
            ],
            [
                'idE' => 2,
                'idF' => 1,
                'points' => 13
            ],
            [
                'idE' => 2,
                'idF' => 3,
                'points' => 14
            ],
            [
                'idE' => 3,
                'idF' => 2,
                'points' => 21
            ],
            [
                'idE' => 3,
                'idF' => 4,
                'points' => 20
            ],
            [
                'idE' => 4,
                'idF' => 3,
                'points' => 11
            ]
        ];
        DB::table('avis')->insert($data);
    }
}
