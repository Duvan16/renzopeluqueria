@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Crear Servicio.</h3>
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
                <form action="/servicios" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Servicio" value={{old('nombre')}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Breve descripcion del servicio" value={{old('descripcion')}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tarifa Estimada ($)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="tarifaEstimada" name="tarifaEstimada" placeholder="En pesos Colombianos" value={{old('tarifaEstimada')}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tiempo estimado (min)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="tiempoEstimado" name="tiempoEstimado" placeholder="Minutos que demora el servicio" value={{old('tiempoEstimado')}}>
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