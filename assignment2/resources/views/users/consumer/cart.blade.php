@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $user->name }}'s Cart</h1>
            <hr>
            <div class="cart">
            @if(is_null($user->cart->dish))
                <p>There are currently no items in your cart.</p>
            @else
            <div class="cart-dish">
                <figure class="dish ">
                    <p class="dish-name">{{ $user->cart->dish->name }}</p>
                    <img src="{{ asset($user->cart->dish->image) }}" height="100" width="150">
                </figure>
                <div class="cart-dish-price">
                    <p><span style="font-weight:bold">Item Price:</span> ${{ $user->cart->dish->price }}</p>
                </div>
                <div class="cart-form">
                    <form method="post" action='{{ url("cart") }}/{{ $user->cart->id }}'>
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="function" value="remove">
                        <input type="hidden" name="dishId" value="{{ $user->cart->dish->id }}">
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="checkout">
                <p>Total: ${{ $user->cart->dish->price }}</p>
                <form class="form" method="post" action='{{ url("order") }}'>
                    {{ csrf_field() }}
                    <input type="hidden" name="consumerId" value="{{ $user->id }}">
                    <input type="hidden" name="restaurantId" value="{{ $user->cart->dish->user_id }}">
                    <input type="hidden" name="dishId" value="{{ $user->cart->dish->id }}">
                    <button type="submit" class="btn btn-success">Checkout Items</button>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection