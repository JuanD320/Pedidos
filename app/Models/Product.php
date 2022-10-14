<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $product_description
 * @property $product_amount
 * @property $product_value
 * @property $product_status
 * @property $created_at
 * @property $updated_at
 *
 * @property OrderDetall[] $orderDetalls
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'product_description' => 'required',
		'product_amount' => 'required',
		'product_value' => 'required',
		'product_status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_description','product_amount','product_value','product_status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDetalls()
    {
        return $this->hasMany('App\Models\OrderDetall', 'product_id', 'id');
    }
    

}
