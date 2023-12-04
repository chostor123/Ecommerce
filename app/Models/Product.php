<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $sku
 * @property $name
 * @property $price
 * @property $weight
 * @property $description
 * @property $thumbnail
 * @property $image
 * @property $category
 * @property $create_date
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
	protected $table = "products";

    
    static $rules = [
		'sku' => 'required',
		'name' => 'required',
		'price' => 'required',
		'weight' => 'required',
		'description' => 'required',
		'thumbnail' => 'required',
		'image' => 'required',
		'category' => 'required',
		'create_date' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sku','name','price','weight','description','thumbnail','image','category','create_date','stock'];



}
