@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')
    <h3 class="text-center">Editar Información del Curso</h3>
    {{--Se utiliza el atributo enctype para poder subir cualquier archivo--}}
    <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombreCurso">Modifique el Nombre del Curso</label>
            <input type="text" class="form-control" value="{{$cursito->nombre}}" name="nombre" id="nombreCurso">
        </div>
        <div class="form-group">
            <label for="descripcion">Modifique la Descripción del Curso</label>
            <input type="text" class="form-control" value="{{$cursito->descripcion}}" name="descripcion" id="descripcion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar Nueva Imagen</label>
            <br>
            <input type="file" name="imagen" id="imagen">
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection
