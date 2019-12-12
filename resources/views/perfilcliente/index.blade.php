@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Mi Perfil.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="thumbnail">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{url('usuarios')}}" method="POST">
                    @csrf
                    <div class="thumbnail">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" value="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correo electrónico</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" value="email@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contraseña actual</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nueva Contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="Nueva Contraseña">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Confirmar contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="Nueva Contraseña">
                            </div>
                        </div>
                        <br>
                        <div align="center">
                            <button type="submit" class="btn-normal">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection