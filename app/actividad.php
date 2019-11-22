<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    protected $table = 'actividads';   
	protected $fillable = ['user_id','hora','fecha', 'tipo'];
}
