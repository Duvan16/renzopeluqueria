@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Pedir Cita.</h3>
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
                <form action="/citas" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fecha *</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha" value={{old('fecha')}}>
                        </div>
                        <label class="col-sm-2 col-form-label">Hora (00:00 p.m/a.m)*</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control" id="hora" name="hora" placeholder="hora" value={{old('hora')}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Servicio *</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="servicio">
                                <option value="">Seleccione</option>
                                @foreach ($servicios as $key =>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Estilista</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="estilista">
                                <option value="">Seleccione</option>
                                @foreach ($estilistas as $key =>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn-normal">¡Pide tu cita ahora!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection