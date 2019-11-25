<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
