<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'preco', 'data'
    ];

	public function registro(){
		return $this->hasMany('App\Registro');
	}

}
