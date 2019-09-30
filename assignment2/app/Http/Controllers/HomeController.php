<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dish;
use App\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['restaurants', 'viewRestaurant', 'documentation', 'popular']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->intended();
    }

    /**
     * Displays all available restaurants that have signed up to the site.
     */
    public function restaurants() {
        $restaurants = User::whereRaw("userType = 'restaurant' and approved = 'approved'")->get();
        return view('restaurant_list')->with('restaurants', $restaurants);
    }

    /**
     * Displays the menu for a selected restaurant.
     */
    public function viewRestaurant($id) {
        $restaurant = User::find($id);
        $dishes = $restaurant->restaurantAvailableDishes()->paginate(4);
        return view('users.restaurant.index')->with('restaurant', $restaurant)->with('dishes', $dishes)->with('user', auth()->user());
    }

    /**
     * Takes the user to a page showing the assignment documentation.
     */
    public function documentation() {
        return view('documentation');
    }

    /**
     * Shows the most popular dishes for the last 30 days.
     */
    public function popular() {
        $popularDishes = Order::selectRaw('dish_id, Count(*) as count')->whereRaw("created_at between date('now', 'start of month') and date('now')")->
            groupBy('dish_id')->orderByRaw('COUNT(*) DESC')->limit(5)->get();
        return view('popular_dishes')->with('popularDishes', $popularDishes);
    }
}
