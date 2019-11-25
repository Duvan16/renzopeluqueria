@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Usuarios.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn-normal-claro" href="{{url('/usuarios/create')}}">Crear Usuario +</a>
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
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td><a href="{{url('/usuarios/'.$user->id.'/edit')}}"><img src="images/update.png" width="25" height="25" alt=""></a></td>
                        <td><a href="{{url('/usuarios/'.$user->id.'/confirmDelete')}}"><img src="images/cancel.png" width="25" height="25" alt=""></a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection