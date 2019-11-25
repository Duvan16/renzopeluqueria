@extends('layouts.user')

@section('content')
<div class="row">
    <div class="col">
        <h1>¿Está seguro de eliminar el servicio {{$servicio->nombre}} ?</h1>
    </div>
</div>
<div class="row">
    <div class="col">

    </div>
</div>
<div class="row">
    <div class="col">
        <form action="/servicios/{{$servicio->id}}" method="POST">
            @csrf
            @method('delete')
            <div align="center">
                <a class="btn btn-secondary" href="/servicios">No</a>
                <button class="btn btn-dark" type="submit">Si</button>
            </div>
        </form>
    </div>
</div>
@endsection