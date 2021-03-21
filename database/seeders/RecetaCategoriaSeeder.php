<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas_categorias')->truncate();

        for ($i=1; $i <=5 ; $i++) { 
            for ($j=1; $j <=3 ; $j++) { 
                DB::table('recetas_categorias')->insert([
                    'receta_id' => $i,
                    'categoria_id' => rand(1, 10)
                ]);
            }
        }
    }
}
