@extends('layouts.user')

@section('content')
<div class="container">
    <div class="thumbnail">
        <h3>Crear pago de servicio</h3>
        <form class="form">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Servicio</label>
                    <select class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Estilista</label>
                    <select class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>Valor</label>
                    <input type="number" class="form-control">
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
                        <th scope="col">Estilista</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">30-Oct-2019</th>
                        <td>15:00</td>
                        <td>Rechazada</td>
                        <td>Corte Caballero</td>
                        <td>7000</td>
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
                        <td>Rechazada</td>
                        <td>Cepillado cabello corto</td>
                        <td>15000</td>
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

    <br><br>
</div>
@endsection