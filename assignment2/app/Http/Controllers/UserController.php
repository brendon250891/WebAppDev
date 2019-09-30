<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dish;
use App\Cart;
use App\CartDish;
use App\Order;

use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Directs users to the correct views based on their userType.
     *
     * @param  int  $id - The id of the user.
     * @return \Illuminate\Http\Response - Where to redirec the user too.
     */
    public function show($id)
    {
        $user = auth()->user();
        if ($user == null) {
            return redirect()->route('login');
        }
        if ($user->id == $id) {
            switch($user->userType) {
                case 'administrator':
                    return view('main')->with('user', $user);
                case 'restaurant':
                    if($user->approved == 'pending') {
                        return view('users.restaurant.not_approved');
                    } else {
                        $available = auth()->user()->restaurantAvailableDishes()->paginate(4);
                        $disabled = auth()->user()->restaurantDisabledDishes;                
                        return view('users.restaurant.home')->with('available', $available)->with('user', auth()->user());
                    }
                default:
                    return view('users.consumer.home');
            }
        } else {
            return redirect('user/'.$user->id);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Updates a restaurant users approved status when an administrator makes a decision.
     *
     * @param  \Illuminate\Http\Request  $request - The data passed from the view.
     * @param  int  $id - The id of the restaurant user.
     * @return \Illuminate\Http\Response - Where to go after process has compelted.
     */
    public function update(Request $request, $id)
    {
        $currentUser = auth()->user();
        if ($currentUser->userType == 'administrator') {
            $user = User::find($id);
            $user->approved = 'approved';
            $user->save();
            return redirect("user/$currentUser->id");
        } else if ($currentUser->id == $id) {
            return redirect("user/$id");
        } else {
            return view('denied');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Takes the user to a list of orders that they have made
     * If the user is restaurant it shows pending and completed orders
     * If the user is a consumer it shows all orders they have placed.
     */
    public function orders($id) {
        $user = User::find($id);
        if(auth()->user()->id == $id) {
            if ($user->userType == 'restaurant') {
                $pendingOrders = $user->restaurantPendingOrders()->orderBy('created_at', 'DESC')->get();
                $completedOrders = $user->restaurantCompletedOrders()->orderBy('created_at', 'DESC')->get();
                return view('users.restaurant.orders.orders')->with('pendingOrders', $pendingOrders)->with('completedOrders', $completedOrders);
            }else {
                return view('users.consumer.orders')->with('orders', $user->consumerOrders()->orderBy('created_at', 'DESC')->get());
            }
        } else {
            return view('denied');
        }
    }

    /**
     * Gets the total cost of sales and number of items sold for a restaurant.
     */
    public function sales($id) {
        if(auth()->user()->id == $id) {
            $weeklyTotals = Order::selectRaw("sum(total) as total, strftime('%W', created_at) as week")
                ->whereRaw('restaurant_id = ?', array($id))->groupby("week")->orderByRaw("week ASC")->limit(12)->get(); 
            return view('users.restaurant.statistics.statistics')->with('user', auth()->user())->with('weeklyTotals', $weeklyTotals);
        } else {
            return view('denied');
        }
    }

    /**
     * Takes the administrator to a list of all pending restaurant applications.
     */
    public function administrator($id) {
        if (auth()->user()->userType == 'administrator') {
            $requests = auth()->user()->pendingRestaurants();
            return view('users.admin.requests')->with('requests', $requests);
        } else {
            return view('denied');
        }
    }
}
