@extends('layouts.user')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="text-justify col-sm-8">
            <h2> Mis Citas.</h2>
            <a class="btn-normal-claro" href="/citas/create">¡Quiero pedir una cita!</a>
            <br><br>
            <table class="table table-bordered">
                <thead class="thead-table">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Estilista</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citas as $cita)
                    <tr>
                        <td>{{$cita->fecha}}</td>
                        <td>{{$cita->hora}}</td>
                        <td>{{$cita->estado}}</td>
                        <td>{{$cita->servicio->nombre}}</td>
                        <td>{{$cita->user_estilista->name}}</td>
                        <td align="center" style="padding:0px">
                            <form action="/citas/{{$cita->id}}" method="POST" style="display: inline-block;padding:0px">
                                @csrf
                                @method('delete')
                                <button class="btn btn-link" type="submit"><img src="images/cancel.png" width="25" height="25" alt=""></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-4 text-justify">
            <h2>Horarios Estilistas.</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Estilista</th>
                        <th scope="col">Horario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->horario}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row" align="center">
        <div class="col-md-10 col-md-offset-1">
            <br>
            <h2>Menú de Servicios</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col-sm-4">Servicio</th>
                        <th scope="col" class="col-sm-3">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicios as $servicio)
                    <tr>
                        <td>{{$servicio->nombre}}</td>
                        <td>{{$servicio->tarifaEstimada}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
</div>
@endsection