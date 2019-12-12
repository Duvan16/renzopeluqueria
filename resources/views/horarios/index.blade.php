@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Estilistas.</h2>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead class="thead-table">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Horario</th>
                        <th>Actualizar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->horario}}</td>
                        <td><a href="{{url('/horario/'.$user->id.'/edit')}}"><img src="images/update.png" width="25" height="25" alt=""></a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection