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
        for ($i=1; $i <=5 ; $i++) { 
         Receta::create([
                'name' => 'Receta '.$i,
                'user_id'  => rand(1,5),
                'preparacion' => '<div><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>',
                'ingredientes' =>  '<div><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>',
                'avatar' =>  'uploads-recetas/foto'.rand(1,4).'.jpg',
            ]); 
        }
    }
}
