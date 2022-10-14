<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @property $id
 * @property $city_name
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer[] $customers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class City extends Model
{
    
    static $rules = [
		'city_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['city_name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer', 'cities_id', 'id');
    }
    

}
