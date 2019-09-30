@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Popular Dishes This Month</h1>
            <hr>
            <div class="menu-gallery">
                @forelse ($popularDishes as $order)
                <figure class="dish">
                    <p class="dish-name">{{ $order->dish->name }}</p>
                    <img src="{{ url($order->dish->image) }}" alt="{{ $order->dish->name }}" width="150" height="150">
                    <figcaption>
                        <p>${{ $order->dish->price }}</p>
                        <p>Ordered {{ $order->count }} times.</p>
                    </figcaption>
                </figure>
                @empty
                    <p>There are no popular dishses to display.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection