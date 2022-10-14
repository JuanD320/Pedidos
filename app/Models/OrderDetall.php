<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetall
 *
 * @property $id
 * @property $order_id
 * @property $product_id
 *
 * @property Order $order
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OrderDetall extends Model
{
    
    static $rules = [
		'order_id' => 'required',
		'product_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['order_id','product_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne('App\Models\Order', 'id', 'order_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    

}
