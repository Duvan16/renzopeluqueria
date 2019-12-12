@extends('layouts.user')

@section('content')
<div class="container">
    <div class="thumbnail">
        <h3>Crear pago de servicio</h3>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{url('homeAdmin')}}" method="POST" class="form">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Servicio</label>
                    <select class="form-control" name="servicio">
                        <option value="">Seleccione</option>
                        @foreach ($servicios as $key =>$value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Estilista</label>
                    <select class="form-control" name="estilista">
                        <option value="">Seleccione</option>
                        @foreach ($estilistas as $key =>$value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>Valor</label>
                    <input type="number" class="form-control" name="valor">
                </div>
                <label> ______________</label>
                <div class="form-group col-md-2">
                    <button type="submit" class="btn-normal">Crear</button>
                </div>
            </div>
        </form>
        <br><br>
    </div>

    <div class="row">
        <div class="text-justify col-sm-12">
            <h2>Pagos pendientes por aprobar.</h2>
            <table class="table table-bordered">
                <thead class="thead-table">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagos as $pago)
                    <tr>
                        <td>{{\Carbon\Carbon::parse($pago->fecha)->toFormattedDateString()}}</td>
                        <td>{{\Carbon\Carbon::parse($pago->fecha)->toTimeString()}}</td>
                        <td>{{$pago->servicio->nombre}}</td>
                        <td>{{$pago->valor}}</td>
                        <td align="center" style="padding:0px">
                            <form action="/homeAdmin/{{$pago->id}}" method="POST" style="display: inline-block;padding:0px">
                                @csrf
                                @method('put')
                                <button class="btn btn-link" type="submit"><img src="images/ok.png" width="25" height="25" alt=""></button>
                            </form>
                            <form action="/homeAdmin/{{$pago->id}}" method="POST" style="display: inline-block;padding:0px">
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
    </div>

    <br><br>
</div>
@endsection