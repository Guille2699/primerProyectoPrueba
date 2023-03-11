@extends("layouts.plantilla")
@section("title", "Cursos")
@section("content")
    <h1>Página para crear un curso</h1>
    
    <form action="{{route("cursos.store")}}" method="post" class="ms-4">
        @csrf
        <label for="nombre">Nombre: </label> <br>
        <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}"> <br>
        @error('nombre')
            <small style="color: red">*{{$message}}</small> <br>
        @enderror

        <label for="descripcion">Descripción: </label><br>
        <textarea name="descripcion" id="descripcion" rows="5">{{old('descripcion')}}</textarea> <br>
        @error('descripcion')
            <small style="color: red">*{{$message}}</small> <br>
        @enderror

        <label for="categoria">Categoría: </label><br>
        <input type="text" name="categoria" id="categoria" value="{{old('categoria')}}"> <br>
        @error('categoria')
            <small style="color: red">*{{$message}}</small> <br>
        @enderror

        <input type="submit" value="Crear">        
    </form>
@endsection