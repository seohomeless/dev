<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	public $timestamps = false;
	
    protected $fillable = [
        'name',
    ];
	
	public function tovars()
    {
		return $this->belongsToMany('App\Products', 'categoriproducts', 'categori_id','tovar_id');
    }
}
