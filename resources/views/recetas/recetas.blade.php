@extends('layouts.app')

@section('botones')
   <a href=" {{route('recetas.create')}} " class="btn btn-danger text-white">
    Crear receta
    </a>        
@endsection
@section('contenido')
<table class="table">
    <thead class="bg-danger text-white ">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Categoría</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>

    @forelse ($recetas as $item)
    <tr>
      <td>
      <a href="{{route('recetas.show',$item->id)}}"> {{$item->name}} </a>  
      </td>
      <td>
      @forelse ($item->categorias->pluck('name') as $categoria)
      <span class="badge bg-primary text-white">{{$categoria}}</span>
      @empty
          <small>No hay categorías para esta receta :(</small>
      @endforelse
      </td>
      <td> 
        <button class="btn btn-outline-primary">
        Editar  
      </button>
      <delete-receta value="{{$item->id}}"></delete-receta> 

      </td>
    </tr>
    @empty
          <h2 class="text-muted">No tienes recetas aún</h2>
    @endforelse
  
    </tbody>
  </table>
@endsection


@section('scripts')
    
@endsection