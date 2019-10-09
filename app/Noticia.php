<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'id_nov',
        'titulo_nov',
        'descripción_nov'
        'img_nov'
        'fecha_creacion_nov'
        'fecha_edicion_nov'
        'estado_nov'
        'id_subarea'
        'id_prioridad'
        'id_tag'
        'id_user'
      ];
}
