<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $guarded = ['id'];

    public function respuestas() {
    	return $this->hasMany(Respuesta::class);
    }

}
