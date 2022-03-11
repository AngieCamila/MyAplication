@extends('layouts.app')

@section('titulo', 'Listado de Cursos')

@section('contenido')

<h3 class="text-center">Listado de Cursos Disponibles</h3>
<br>
<div class="row"> {{--Ya tenemos la fila--}}
{{--foreach es un ciclo o bucle especialpara trabajar con arrays--}}
{{--Recordar: Existen ciclos como while, for, do while, foreach--}}
@foreach ($cursito as $camila)
    {{--Para llmar información de php basta con interpolar las variables usando la doble llave --}}
        <div class="col-sm"> {{--Ya tenemos la columna--}}
            <div class="card text-center" style="width: 18rem; margin-top:30px;">
                <img style="height: 200px; width: 250px; margin: 20px;" src="{{ Storage::url($camila->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$camila['nombre']}}</h5>
                    {{--Se necesita el id para ver un registro en particular--}}
                    <a href="/cursos/{{$camila->id}}" class="btn btn-secondary">Ver más</a>
                </div>
            </div>
        </div>
@endforeach
</div>

@endsection
