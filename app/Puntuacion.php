<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntuacion extends Model
{
    protected $table = 'puntuaciones';
    protected $guarded = ['id'];

    public function user ()
    {
    	return $this->belongsTo(User::class);
    }
}
