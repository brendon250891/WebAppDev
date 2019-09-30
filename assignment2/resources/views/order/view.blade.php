@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Details for Order: {{ $order->id }}</h1>
            <p>Placed on: {{ $order->created_at }}</p>
            <hr>
            <h3>Restaurant Details</h3>
            <p>Name: {{ $order->restaurant->name }}</p>
            <p>Address: {{ $order->restaurant->streetNumber }} {{ $order->restaurant->streetName }}</p>
            <p>City: {{ $order->restaurant->city }}</p>
            <hr>
            <h3>Dish Details</h3>
            <p>Name: {{ $order->dish->name }}</p>
            <p>Price: ${{ $order->dish->price }}</p>
            <hr>
            <h3>Delivery Details</h3>
            <p>Address: {{ $order->consumer->streetNumber }} {{ $order->consumer->streetName }}</p>
            <p>City: {{ $order->consumer->city }}</p>
            <p>Postcode: {{ $order->consumer->postcode }}</p>
            <p>State: {{ $order->consumer->state->abbreviation }}</p>
            @if ($viewer->userType == 'restaurant' && $viewer->id == $order->restaurant->id && $order->delivered == '0')
            <hr>
            <form method="post" action='{{ url("order/$order->id") }}'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-success">Delivered</button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection