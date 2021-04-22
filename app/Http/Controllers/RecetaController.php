<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecetaStoreRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Categoria;
use App\Models\Receta;
use App\Models\User;
use App\Repository\I_RecetaRepository;
use Illuminate\Http\Request;

class RecetaController extends Controller
{

    protected $recetaDAO;
    public function __construct(I_RecetaRepository $recetaRepository)
    {
        $this->recetaDAO = $recetaRepository;
        $this->middleware('auth', ['except' =>'show']);
    }

    public function index()
    {
        $user =  User::find(Auth()->user()->id);
        $recetas = $user->recetas;
        return view('recetas.recetas', compact('recetas'));
    }


    public function create()
    {
        $categorias = $this->recetaDAO->categorias();
        return view('recetas.crear', compact('categorias'));
    }


    public function store(RecetaStoreRequest $request)
    {
        $this->recetaDAO->storeReceta($request);
        return redirect()->action([RecetaController::class, 'index']);
    }


    public function show($receta)
    {
       $receta = $this->recetaDAO->showReceta($receta);
       return view('recetas.show',compact('receta'));
    }


    public function edit(Receta $receta)
    {
        $receta =  Receta::findOrFail($receta->id);
        $categorias = $this->recetaDAO->categorias();
        return view('recetas.edit',compact('receta','categorias'));
    }


    public function update(UpdateUserRequest $request, Receta $receta)
    {
       $updateUser = $this->recetaDAO->editarReceta($request,$receta);
       return redirect()->route('recetas.show', $updateUser);
    }

    public function destroy(Receta $receta)
    {
        return $this->recetaDAO->deleteReceta($receta->id);
    }
}
