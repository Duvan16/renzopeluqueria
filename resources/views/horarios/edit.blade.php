@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            
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
                <form action="/horario/{{$user->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Horario</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" placeholder="Ponga el horario del estilista organizado de forma que cada horario diferente este separado por punto y coma. Ejemplo: Martes, Jueves: 12:00 - 18:00; Viernes: 9:00 - 19:00" required value="{{$user->horario}}" name="horario"></textarea>
                        </div>
                    </div>
                    <div align="center">
                        <button class="btn-normal" type="submit">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection