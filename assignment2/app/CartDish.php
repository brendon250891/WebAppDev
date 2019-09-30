<?php

namespace App;

use App\Cart;

use Illuminate\Database\Eloquent\Model;

class CartDish extends Model
{
    protected $fillable = ['cart_id', 'dish_id', 'quantity', 'note'];

    public function cart() {
        return $this->hasOne('App\Cart');
    }

    public function dish() {
        return $this->hasOne('App\Dish');
    }
}
