<?php

namespace Database\Seeders;

use App\Models\Receta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Receta::truncate();
        for ($i=1; $i <=30 ; $i++) { 
         Receta::create([
                'name' => 'Receta '.$i,
                'user_id'  => rand(1,10),
                'preparacion' => Str::random(200),
                'ingredientes' =>  Str::random(200),
            ]); 
        }
    }
}
