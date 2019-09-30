<?php

namespace App;
use App\Dish;
use App\Cart;
use App\State;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];
    /**
     * Allows the variables in the array to be mass assigned.
     */
    protected $fillable = [
        'name', 'email', 'password', 'userType', 'approved', 'streetNumber', 'streetName', 
        'city', 'postcode', 'state_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Links a state to a users address.
     */
    public function state() {
        return $this->belongsTo('App\State');
    }
    /**
     * Links restaurant users to their dishes
     */
    public function dishes() {
        return $this->hasMany('App\Dish');
    }

    /**
     * Gets the orders for a consumer user
     */
    public function consumerOrders() {
        return $this->hasMany('App\Order', 'consumer_id');
    }

    /**
     * Gets the orders for a restaurant.
     */
    public function restaurantOrders() {
        return $this->hasMany('App\Order', 'restaurant_id');
    }

    /**
     * Each user has one cart that remains throughout their account life.
     */
    public function cart() {
        return $this->hasOne('App\Cart', 'user_id');
    }

    /**
     * Restaurant functions
     */

    /**
     * Gets all the available dishes for the restaurant
     */
    public function restaurantAvailableDishes() {
        return $this->dishes()->where('available', '=', true);
    }

    /**
     * Gets all the unavailable dishes for the restaurant
     */
    public function restaurantDisabledDishes() {
        return $this->dishes()->where('available', '=', false);
    }

    /**
     * Gets all the pending orders for a restaurant
     */
    public function restaurantPendingOrders() {
        return $this->restaurantOrders()->where('delivered', '=', false);
    }

    /**
     * Gets all the completed orders for a restaurant.
     */
    public function restaurantCompletedOrders() {
        return $this->restaurantOrders()->where('delivered', '=', true);
    }

    /**
     * Gets the sum of a restaurants sales and how many items they have sold.
     */
    public function restaurantSalesStatistics() {
        return $this->restaurantOrders()->selectRaw('SUM(total) as total, COUNT(*) as count')->first();
    }

    /**
     * Gets the sales statistics over the last 12 weeks.
     */
    public function weeklySalesStatistics() {
        return $this->restaurantOrders()->selectRaw('sum(total) as total')->groupBy("strftime('%W', created_at)")->
        orderByRaw("strftime('%W', created_at) DESC")->limit(12);
    }

    /**
     * Admin
     */

     /**
      * Gets the pending restaurants.
      */
    public function pendingRestaurants() {
        return $this->all()->where('approved', '=', 'pending');
    }
}
