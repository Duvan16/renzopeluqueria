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
        
        <form action="{{url('homeEstilista')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Servicio</label>
                    <select class="form-control" name="servicio">
                        <option value="">Seleccione</option>
                        @foreach ($servicios as $key =>$value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
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
            <h2> Mis Citas pendientes por aprobar.</h2>
            <table class="table table-bordered">
                <thead class="thead-table">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">30-Oct-2019</th>
                        <td>15:00</td>
                        <td>Corte Caballero</td>
                        <td align="center">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <a href=""><img src="images/ok.png" width="25" height="25" alt=""></a></div>
                            <div class="col-sm-4">
                                <a href=""><img src="images/cancel.png" width="25" height="25" alt=""></a></div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">31-Oct-2019</th>
                        <td>12:00</td>
                        <td>Cepillado cabello corto</td>
                        <td align="center">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <a href=""><img src="images/ok.png" width="25" height="25" alt=""></a></div>
                            <div class="col-sm-4">
                                <a href=""><img src="images/cancel.png" width="25" height="25" alt=""></a></div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="text-justify col-sm-6">
            <h2> Mis Citas.</h2>
            <a class="btn-normal-claro" href="crearCitaEstilista.html">Asignar Cita + </a>
            <br><br>
            <table class="table table-bordered ">
                <thead class="thead-table">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">30-Oct-2019</th>
                        <td>15:00</td>
                        <td>Corte Caballero</td>
                        <td align="center"><a href=""><img src="images/cancel.png" width="25" height="25" alt=""></a></td>
                    </tr>
                    <tr>
                        <th scope="row">31-Oct-2019</th>
                        <td>12:00</td>
                        <td>Cepillado cabello corto</td>
                        <td align="center"><a href=""><img src="images/cancel.png" width="25" height="25" alt=""></a></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="col-sm-6 text-justify">
            <h2> Mis Pagos Realizados.</h2>
            <table class="table table-bordered">
                <thead class="thead-table">
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagos as $pago)
                    <tr>
                        <td>{{\Carbon\Carbon::parse($pago->fecha)->toFormattedDateString()}}</td>
                        <td>{{\Carbon\Carbon::parse($pago->fecha)->toTimeString()}}</td>
                        <td>{{$pago->servicio->nombre}}</td>
                        <td>{{$pago->valor}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection