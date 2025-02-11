<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            'nom' => 'Yassine',
            'activite' => 'Achat',
            'adresse' => 'Casa',
            'contact' => 'Samsung'
        ]);
    }
}
