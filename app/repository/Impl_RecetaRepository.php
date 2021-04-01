<?php

namespace App\Repository;

use App\Models\Categoria;
use App\Models\Receta;

class Impl_RecetaRepository implements I_RecetaRepository
{

    public function storeReceta($request)
    {
        $receta = $request->except('categorias', 'avatar');
        $receta['user_id'] = auth()->user()->id;
        $receta['avatar'] =  $this->updateImage($request);
        $nuevaReceta = Receta::create($receta);
        $this->assignedCategorias($request, $nuevaReceta);
    }


    public function createReceta()
    {
        return  Categoria::all()->pluck('name', 'id');
    }


    public function showReceta($id)
    {
        return Receta::with('categorias')->findOrFail($id);
    }

    public function updateImage($request)
    {
        return $request['avatar']->store('uploads-recetas', 'public');
    }
    public function assignedCategorias($request, $nuevaReceta)
    {
        $categorias = $request->only('categorias');
        $nuevaReceta->categorias()->attach($categorias['categorias']);
    }

    public function deleteReceta($id)
    {
        $receta = Receta::findOrFail($id);
        return $receta->delete();
    }
}
