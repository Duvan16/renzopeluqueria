<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
    public function pago()
    {
        return $this->belongsTo(Pago::class);
    }
   
   
}
