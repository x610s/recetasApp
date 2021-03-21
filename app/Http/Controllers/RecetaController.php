<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecetaStoreRequest;
use App\Models\Receta;
use App\Models\User;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    
    public function __construct()
    {   
            $this->middleware('auth');
    }

    public function index()
    {   
        $user =  User::find(Auth()->user()->id);
        $recetas = $user->recetas;
        return view('recetas.recetas',compact('recetas'));
    }

   
    public function create()
    {
    return view('recetas.crear');
    }

   
    public function store(RecetaStoreRequest $request)
    {
        $receta = $request->all();
        $receta['user_id'] = auth()->user()->id;
        $nuevaReceta = Receta::create($receta);
         return redirect()->action([RecetaController::class,'index']); 
    }

   
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
