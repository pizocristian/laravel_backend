<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = ["id_usuario1", "id_producto1", "cantidad"];
}
