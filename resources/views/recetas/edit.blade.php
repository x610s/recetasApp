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
            <form method="POST" action="{{route('recetas.update',$receta)}}" enctype="multipart/form-data">
                @method('PUT')
                @include('recetas.formularioEditar')
                <button class="btn btn-primary" type="submit">
                    Guardar cambios
                </button>
            </form>
        </div>
    </div>
    
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>
@endsection
