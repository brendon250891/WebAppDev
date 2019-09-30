<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Dish;

class CartController extends Controller
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
     * Displays the user their cart if they are authorised to view it and shows the dish if there is one.
     *
     * @param  int  $id - The carts id.
     * @return \Illuminate\Http\Response - The view that is returned.
     */
    public function show($id)
    {
        $cart = Cart::find($id);
        if (auth()->user()->id == $cart->user_id) {            
            return view('users.consumer.cart')->with('user', auth()->user());
        } else {
            return view('denied');
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
        
    }

    /**
     * Updates the cart by adding a dish or removing a dish.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        if ($request['function'] == 'remove') {
            $cart->dish_id = null;
            $cart->quantity = 0;
            $cart->total = 0;
            $cart->save();
            return redirect("cart/$cart->id");
        } else {
            $dish = Dish::find($request['dishId']);
            $quantity = $cart->quantity;
            $cart->dish_id = $dish->id;
            $cart->quantity = $quantity + 1;
            $cart->total = $dish->price;
            $cart->save();
            return redirect("restaurant/$dish->user_id");
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
        
    }
}
