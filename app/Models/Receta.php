<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;


    protected $fillable=[
        'name',
        'ingredientes',
        'preparacion',
        'user_id',
        'avatar',
    ];


    
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class,'recetas_categorias');
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
