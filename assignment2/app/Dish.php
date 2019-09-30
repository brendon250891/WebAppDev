<?php

namespace App;

use App\Cart;
use App\Order;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    /**
     * Allows the variables in the array to be mass assigned.
     */
    protected $fillable = ['name', 'price', 'available', 'image', 'user_id'];

    /**
     * Each dish can only belong to a single restaurant (user)
     */
    public function restaurant() {
        return $this->belongsTo('App\User');
    }

    /**
     * Each dish can belong to many carts
     */
    public function carts() {
        return $this->belongsTo('App\Cart', 'dish_id');
    }

    /**
     * Each dish can belong to many orders.
     */
    public function orders() {
        return $this->belongsToMany('App\Order');
    }
}
