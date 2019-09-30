<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Dish;
use App\User;
use App\State;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Creates a new order when a consumer check's out their cart.
     *
     * @param  \Illuminate\Http\Request  $request - The dish data passed from the cart.
     * @return \Illuminate\Http\Response - Where to go after order has been made.
     */
    public function store(Request $request)
    {
        // place order
        $dish = Dish::find($request['dishId']);  
        $order = Order::create([
            'consumer_id' => $request['consumerId'],
            'restaurant_id' => $request['restaurantId'],
            'dish_id' => $dish->id,
            'total' => $dish->price,
            'paid' => true,
            'delivered' => false
        ]);
        
        // empty cart
        $cart = User::find($request['consumerId'])->cart;
        $cart->dish_id = null;
        $cart->total = 0.0;
        $cart->quantity = 0;
        $cart->save();
        return redirect("order/$order->id");
    }

    /**
     * Displays a receipt of the order after it has been made.
     *
     * @param  int  $id - The id of the order record.
     * @return \Illuminate\Http\Response - Where to display the receipt.
     */
    public function show($id)
    {
        // need dish, user address can change i think.
        $user = auth()->user();
        $order = Order::find($id);
        return view('order.view')->with('viewer', $user)->with('order', $order);
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
     * Updates the order when a restaurant delivers the food to the customer.
     *
     * @param  \Illuminate\Http\Request  $request - The data passed from the view.
     * @param  int  $id - The id of the order.
     * @return \Illuminate\Http\Response - Where to redirect after completion.
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->delivered = true;
        $order->save();
        return redirect("user/orders/$order->restaurant_id");
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
}
