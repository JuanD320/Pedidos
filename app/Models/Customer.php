<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $cities_id
 * @property $customer_id_number
 * @property $custumer_name
 * @property $customer_birth_date
 * @property $customer_addres
 * @property $customer_phone
 * @property $created_at
 * @property $updated_at
 *
 * @property City $city
 * @property Order[] $orders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'cities_id' => 'required',
		'customer_id_number' => 'required',
		'custumer_name' => 'required',
		'customer_birth_date' => 'required',
		'customer_addres' => 'required',
		'customer_phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cities_id','customer_id_number','custumer_name','customer_birth_date','customer_addres','customer_phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasOne('App\Models\City', 'id', 'cities_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'customer_id', 'id');
    }
    

}
