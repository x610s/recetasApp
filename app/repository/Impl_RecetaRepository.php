<?php

namespace App\Repository;

use App\Models\Categoria;
use App\Models\Receta;
use Illuminate\Support\Facades\Storage;

class Impl_RecetaRepository implements I_RecetaRepository
{

    public function storeReceta($request)
    {
        $receta = $request->except('categorias', 'avatar');
        $receta['user_id'] = auth()->user()->id;
        $receta['avatar'] =  $this->storeImg($request);
        $nuevaReceta = Receta::create($receta);
        $this->assignedCategorias($request, $nuevaReceta);
    }


    public function categorias()
    {
        return  Categoria::all()->pluck('name', 'id');
    }


    public function showReceta($id)
    {
        return Receta::with('categorias')->findOrFail($id);
    }

    
    public function deleteReceta($id)
    {
        $receta = Receta::findOrFail($id);
        $receta->categorias()->detach();
        return $receta->delete();
    }

    public function editarReceta($request,$receta){
       $nuevaReceta = Receta::findOrFail($receta->id);
       if ($request->hasFile('avatar')) {
        $this->updateImg($nuevaReceta, $request);
       }
       $nuevaReceta->update($request->except('categorias','avatar'));
       $nuevaReceta->categorias()->sync($request->categorias);
       return $nuevaReceta;
    }


    /* Aditional Methods */

    public function storeImg($request)
    {
        return $request['avatar']->store('uploads-recetas', 'public');
    }
  
    public function assignedCategorias($request, $nuevaReceta)
    {
        $categorias = $request->only('categorias');
        $nuevaReceta->categorias()->attach($categorias['categorias']);
    }

    public function updateImg($nuevaReceta, $request)
    {
        if($nuevaReceta->avatar !== null || $nuevaReceta->avatar!== ''){
            Storage::delete($nuevaReceta->avatar);
        }
        $nuevaReceta->avatar = $request->file('avatar')->store('uploads-recetas', 'public');
    }

}
