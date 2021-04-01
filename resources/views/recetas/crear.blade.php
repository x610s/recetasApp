@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection




@section('botones')
<div class="col-md-8  mx-auto">
<a href=" {{route('recetas.index')}} " class="btn btn-danger text-white">
    Volver
    </a>   
</div>


@endsection
@section('contenido')
    <div class="row">

        <div class="col-md-8 shadow mx-auto p-4">

      

            <form method="POST" action="{{route('recetas.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">    
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                      @enderror
                </div>
                <div class="row justify-content-start mx-auto" id="div1">    

                    @foreach ($categorias as $id => $name)
                    <div  class="btn-group-toggle my-2" data-toggle="buttons">
                        <label class="btn btn-sm mx-2 btn-outline-primary" >
                          <input type="checkbox" value="{{$id}}" name="categorias[]"/>
                            {{$name}}
                        </label>
                      </div>
                    @endforeach
                   @error('categorias')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                      @enderror
                </div> 

                <div class="form-group mt-4" >
                    <label for="ingredientes">Ingredientes</label>
                    <input id="ingredientes" type="hidden" name="ingredientes" value="{{old('ingredientes')}}">
                    <trix-editor class="bg-white" input="ingredientes"> </trix-editor>
                    @error('ingredientes')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>


                <div class="form-group" >
                    <label for="preparacion">Preparacion</label>
                    <input id="preparacion" type="hidden"name="preparacion" value="{{old('preparacion')}}">
                    <trix-editor class="bg-white" input="preparacion"> </trix-editor>
                    @error('preparacion')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>

                
                <div class="form-group" >
                    <label for="avatar">Imagen</label>
                    <input id="avatar" type="file" class="form-control" name="avatar" >
                    @error('avatar')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>



                <button class="btn btn-primary" type="submit">
                    Guardar
                </button>

            </form>

        </div>
    </div>
    
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>
@endsection
