@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Crear Usuario.</h3>
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
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nombre Usuario</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Usuario" value={{old('name')}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Correo Electrónico</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" value={{old('email')}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contraseña</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" value={{old('password')}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Rol</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="rol">
                                <option value="">Seleccione</option>
                                @foreach ($roles as $key =>$value)
                                <option value="{{$key}}">{{$key}} - {{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div align="center">
                        <button class="btn-normal" type="submit">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection