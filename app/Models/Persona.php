<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function Documento(){
        return $this->belongsTo(Documento::class);
    }
    public function proveedor(){
        return $this->hasOne(Proveedor::class);
    }
    public function cliente(){
        return $this->hasOne(Cliente::class);
    }
}
