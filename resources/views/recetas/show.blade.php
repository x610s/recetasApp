@extends('layouts.app')


@section('css')

@endsection
@section('contenido')

    <h2 class="text-center display-4 mb-3">{{$receta->name}}</h2>
    <article class="receta-wrapper">


        <div class="shadow receta-wrapper-top">
            <img src="{{Storage::url($receta->avatar)}}"  alt="{{$receta->avatar}}" >

            
            <div class="py-4 receta-wrapper-top-der"> 
                <h5 class="text-center text-muted border py-1">Ingredientes</h5>
                
                 <div class="col-12 py-3 ingredientes">
                    {!! $receta->ingredientes !!}
                 </div>

                <div class="etiquetas">
                <h5 class="text-center text-muted border py-1 mb-3">Etiquetas</h5>
                    

                   @foreach ($receta->categorias->pluck('name') as $item)
                   <span class="badge rounded-pill bg-info text-white p-2 my-1"> {{$item}} </span>
                    @endforeach 
                </div>

                <div >
                    <small class="text-muted">Fecha: </small>
                    <fecha-receta></fecha-receta>
                 
                </div>
            </div> 
        </div>
     
            <h2 class="text-center display-4 my-4">Preparación</h2>
            <div>
                <p>
                    {!! $receta->preparacion !!}
                </p>
            </div>
    </article>

@endsection


