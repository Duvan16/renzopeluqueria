@extends('layouts.user')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="text-justify col-sm-8">
            <h2> Mis Citas.</h2>
            <a class="btn-normal-claro" href="crearCitaCliente.html">¡Quiero pedir una cita!</a>
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
                    <tr>
                        <th scope="row">30-Oct-2019</th>
                        <td>15:00</td>
                        <td>Aceptada</td>
                        <td>Corte Caballero</td>
                        <td>Renzo Castaño</td>
                        <td align="center"><a href=""><img src="images/cancel.png" width="25" height="25" alt=""></a></td>
                    </tr>
                    <tr>
                        <th scope="row">31-Oct-2019</th>
                        <td>12:00</td>
                        <td>Rechazada</td>
                        <td>Cepillado cabello corto</td>
                        <td>Luz Elena Castaño</td>
                        <td align="center"><a href=""><img src="images/cancel.png" width="25" height="25" alt=""></a></td>
                    </tr>
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
                    <tr>
                        <td>Nombre Estilista x</td>
                        <td>
                            <ul class="list-unstyled">
                                <li>Lunes, Martes, Jueves : 10:00 - 19:00</li>
                                <li>Viernes, Sábados: 9:00 - 20:00</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre Estilista x</td>
                        <td>
                            <ul class="list-unstyled">
                                <li>Lunes, Martes, Jueves : 10:00 - 19:00</li>
                                <li>Viernes, Sábados: 9:00 - 20:00</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre Estilista x</td>
                        <td>
                            <ul class="list-unstyled">
                                <li>Lunes, Martes, Jueves : 10:00 - 19:00</li>
                                <li>Viernes, Sábados: 9:00 - 20:00</li>
                            </ul>
                        </td>
                    </tr>
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
                        <th scope="col" class="col-sm-4">Servicio</th>
                        <th scope="col" class="col-sm-1">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Servicio x</td>
                        <th scope="row">$$$$$$</th>
                        <td>Servicio x</td>
                        <th scope="row">$$$$$$</th>
                    </tr>
                    <tr>
                        <td>Servicio x</td>
                        <th scope="row">$$$$$$</th>
                        <td>Servicio x</td>
                        <th scope="row">$$$$$$</th>
                    </tr>
                    <tr>
                        <td>Servicio x</td>
                        <th scope="row">$$$$$$</th>
                        <td>Servicio x</td>
                        <th scope="row">$$$$$$</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br><br>
</div>
@endsection