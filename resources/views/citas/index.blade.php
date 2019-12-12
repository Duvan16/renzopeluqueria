@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Citas.</h2>
        </div>
    </div>
    <div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
            @foreach ($estilistas as $key =>$value)
            <li role="presentation">
                <form action="/citas/{{$key}}" method="post" class="form">
                    @csrf
                    @method('get')
                    <button type="submit" class="btn btn-link">{{$value}}</button>
                </form>
            </li>
            @endforeach
        </ul>
        <div id="tabContent1" class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home1">
                <table class="table table-bordered">
                    <thead class="thead-table">
                        <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                        <tr>
                            <td>{{$cita->user_cliente->name}}</td>
                            <td>{{$cita->servicio->nombre}}</td>
                            <td>{{$cita->fecha}}</td>
                            <td>{{$cita->hora}}</td>
                            <td>{{$cita->estado?"Aprobada":"Rechazada"}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection