<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $customer_id
 * @property $order_date
 * @property $order_total
 * @property $order_date_delivery
 * @property $order_status
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property OrderDetall[] $orderDetalls
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		'customer_id' => 'required',
		'order_date' => 'required',
		'order_total' => 'required',
		'order_date_delivery' => 'required',
		'order_status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_id','order_date','order_total','order_date_delivery','order_status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'id', 'customer_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDetalls()
    {
        return $this->hasMany('App\Models\OrderDetall', 'order_id', 'id');
    }
    

}
