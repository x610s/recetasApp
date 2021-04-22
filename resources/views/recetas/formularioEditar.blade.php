@csrf
<div class="form-group">    
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{old('name')  ? old('name') : $receta->name}}">
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
          <input type="checkbox"  value="{{$id}}" name="categorias[]"  
            @if ($receta->categorias->pluck('id')->contains($id))
                checked
            @endif
          />
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
    <input id="ingredientes" type="hidden" name="ingredientes" value="{{old('ingredientes') ? old('ingredientes') : $receta->ingredientes}}">
    <trix-editor class="bg-white" input="ingredientes"> </trix-editor>
    @error('ingredientes')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
</div>


<div class="form-group" >
    <label for="preparacion">Preparacion</label>
    <input id="preparacion" type="hidden"name="preparacion" value="{{old('preparacion') ? old('preparacion') : $receta->preparacion}}">
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
