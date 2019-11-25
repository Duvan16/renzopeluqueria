@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Servicios.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn-normal-claro" href="/servicios/create">Crear Servicio +</a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead class="thead-table">
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Tarifa Estimada</th>
                        <th>Tiempo (min)</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicios as $servicio)
                    <tr>
                        <td>{{$servicio->id}}</td>
                        <td>{{$servicio->nombre}}</td>
                        <td>{{$servicio->descripcion}}</td>
                        <td>{{$servicio->tarifaEstimada}}</td>
                        <td>{{$servicio->tiempoEstimado}}</td>
                        <td><a href="/servicios/{{$servicio->id}}/edit"><img src="images/update.png" width="25" height="25" alt=""></a></td>
                        <td><a href="/servicios/{{$servicio->id}}/confirmDelete"><img src="images/cancel.png" width="25" height="25" alt=""></a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection