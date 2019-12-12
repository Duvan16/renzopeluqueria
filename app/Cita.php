<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
    public function user_estilista()
    {
        return $this->belongsTo('App\User','estilista_id');
    }
    public function user_cliente()
    {
        return $this->belongsTo('App\User','cliente_id');
    }
    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }
}
