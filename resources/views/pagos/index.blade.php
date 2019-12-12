@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Pagos.</h2>
        </div>
    </div>
    <div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
            @foreach ($estilistas as $key =>$value)
            <li role="presentation">
                <form action="/pagos/{{$key}}" method="post" class="form">
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
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pagos as $pago)
                        <tr>
                            <td>{{\Carbon\Carbon::parse($pago->fecha)->toFormattedDateString()}}</td>
                            <td>{{\Carbon\Carbon::parse($pago->fecha)->toTimeString()}}</td>
                            <td>{{$pago->servicio->nombre}}</td>
                            <td>{{$pago->valor}}</td>
                            <td>{{$pago->estado?"Aprobado":"Pendiente Aprobado"}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection