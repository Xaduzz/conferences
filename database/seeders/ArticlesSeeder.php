<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Article()) ->insert([
            [
                'title'=> "PavadinimasNR1",
                'content'=> "CONTENTAS NR 1"
            ],
            [
                'title'=>"KONFERENCIJOS PAVADINIMAS 2",
                'content'=> "KONFERENCIJOS KONTENTAS 2"
            ]
            ]);
    }
}
