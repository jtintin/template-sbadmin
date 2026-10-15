<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $table = 'presentaciones';
        public function productos(){
        return $this->belongsToMany(Producto::class);
    }

     public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);
    }

}
