@extends("layouts.plantilla")
@section("title", "Cursos edit")
@section("content")
    <h1>Página para editar un curso</h1>
    
    <form action="{{route("cursos.update", $curso)}}" method="POST" class="ms-4">
        @csrf
        @method("put")
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="{{old('nombre', $curso->nombre)}}"> <br><br>
        @error('nombre')
            <small style="color: red">*{{$message}}</small> <br>
        @enderror

        <label for="descripcion">Descripción: </label><br><br>
        <textarea name="descripcion" id="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea> <br><br>
        @error('descripcion')
            <small style="color: red">*{{$message}}</small> <br>
        @enderror

        <label for="categoria">Categoría: </label>
        <input type="text" name="categoria" id="categoria" value="{{old('categoria', $curso->categoria)}}"> <br><br>
        @error('nombre')
            <small style="color: red">*{{$message}}</small> <br>
        @enderror

        <input type="submit" value="Actualizar">        
    </form>
@endsection