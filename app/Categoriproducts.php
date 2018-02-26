<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriproducts extends Model
{
	public $timestamps = false;
	
    protected $fillable = [
        'categori_id', 'tovar_id',
    ];
	

}
