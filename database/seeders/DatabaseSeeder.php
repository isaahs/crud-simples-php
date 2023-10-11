<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loja;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Loja::create(['nomeLoja' => 'AntonioTI', 'areaTotal'=>300.2, 'dataInauguracao'=> '2004-09-01']);
       Loja::create(['nomeLoja' => 'AntonioTI', 'areaTotal'=>300.2, 'dataInauguracao'=> '2004-09-01']);
       Loja::create(['nomeLoja' => 'AntonioTI', 'areaTotal'=>300.2, 'dataInauguracao'=> '2004-09-01']);
    }
}
