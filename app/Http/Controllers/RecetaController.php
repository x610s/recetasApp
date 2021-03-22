<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecetaStoreRequest;
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
        $this->middleware('auth');
    }

    public function index()
    {
        $user =  User::find(Auth()->user()->id);
        $recetas = $user->recetas;
        return view('recetas.recetas', compact('recetas'));
    }


    public function create()
    {
        $categorias = $this->recetaDAO->createReceta();
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
        //
    }


    public function update(Request $request, Receta $receta)
    {
        //
    }

    public function destroy(Receta $receta)
    {
        //
    }
}
