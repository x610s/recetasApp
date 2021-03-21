<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Categoria::truncate();
        for ($i=1; $i <=10 ; $i++) { 
            Categoria::create([
                   'name' => 'Categoria '.$i,
               ]); 
           }
    }
}
