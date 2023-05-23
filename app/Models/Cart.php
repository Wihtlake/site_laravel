<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

	public function products(){
		// return $this->belongsToMany(Product::class, 'cart_product')->withPivot('quantity');
		return $this->belongsTo(Product::class, 'product_id');

	}
	protected $guarded = [];

	protected $fillable = [
		'user_id',
		'product_id',
		'quantity',
	];
	
}
