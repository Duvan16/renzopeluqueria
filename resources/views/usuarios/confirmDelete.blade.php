@extends('layouts.user')

@section('content')
<div class="row">
    <div class="col">
        <h1>¿Está seguro de eliminar el usuario {{$usuario->name}} ?</h1>
    </div>
</div>
<div class="row">
    <div class="col">

    </div>
</div>
<div class="row">
    <div class="col">
        <form action="/usuarios/{{$usuario->id}}" method="POST">
            @csrf
            @method('delete')
            <div align="center">
                <a class="btn btn-secondary" href="/usuarios">No</a>
                <button class="btn btn-dark" type="submit">Si</button>
            </div>
        </form>
    </div>
</div>
@endsection