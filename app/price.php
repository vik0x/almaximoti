<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
	public $primaryKey = null;
	public $fillable = [
		'product_id',
		'buy_price',
		'sale_price',
		'created_at',
		'updated_at'

	];
    //
}
