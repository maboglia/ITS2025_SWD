<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doc = file('https://raw.githubusercontent.com/maboglia/CorsoPHP/refs/heads/master/README.md');

        foreach ($doc as $riga) {
            if ( str_contains($riga, '####' )){
                Item::create(['argomento'=> str_replace(['####', '**'], '', $riga)  ]);
            }

        }

    }
}
