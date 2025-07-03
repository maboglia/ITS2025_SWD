<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Product::factory()->count(10)->create();

        $prodottiCSV = file('https://raw.githubusercontent.com/maboglia/ProgrammingResources/refs/heads/master/tabelle/prodotti/prodotti.csv');
    
        foreach ($prodottiCSV as $rigaProdotto) {
            $rigaProdotto = str_replace('"',"", $rigaProdotto);
            $pezzi = explode(',',$rigaProdotto);
            if ($pezzi[0]!='Nome')
            Product::create([
                "nome" => $pezzi[0],
                "categoria" => $pezzi[1],
                "prezzo" => $pezzi[2],
                "giacenza" => $pezzi[3],
            ]);

        }
    
    }
}
