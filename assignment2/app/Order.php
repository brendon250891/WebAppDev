<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['consumer_id', 'restaurant_id', 'dish_id', 'total', 'paid', 'delivered'];

    public function dish() {
        return $this->belongsTo('App\Dish', 'dish_id');
    }

    public function consumer() {
        return $this->belongsTo('App\User', 'consumer_id');
    }

    public function restaurant() {
        return $this->belongsTo('App\User', 'restaurant_id');
    }

    function mostPopularDishes() {
        return $this->hasOne('App\Dish');
    }
}
