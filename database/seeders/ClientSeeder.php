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
        DB::table("clients")->insert(
            [
                "nom"=>"mohammed",
                "telephone"=>"0600-00543",
                "nomProduit"=>"machaine",
                "quantite"=>1,
                "prix"=>300,
                "prixAvance"=>120
            ]
        );
    }
}
//php artisan db:seed