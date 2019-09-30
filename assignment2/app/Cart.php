<?php

namespace App;

use App\User;
use App\CartDish;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * Allows the variables in the array to be mass assigned.
     */
    protected $fillable = ['user_id', 'dish_id','total', 'quantity'];

    /**
     * Links a cart to its user.
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Links a cart to its dishes
     */
    public function dishes() {
        return $this->hasOne('App\Dish');
    }

    /**
     * Links a cart to it's dish
     */
    public function dish() {
        return $this->belongsTo('App\Dish');
    }
}
