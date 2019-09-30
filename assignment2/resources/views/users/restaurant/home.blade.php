@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-11 bottom">
                    <h1>Available Menu Items</h1>
                </div>
                <div class="col-md-1 bottom">
                    <a class="add-dish" href="{{ route('dish.create') }}">+</a>
                </div>
            </div>
            <hr>
            <div class="menu-gallery">
                @forelse ($available as $dish)
                <figure class="dish">
                    <p class="dish-name">{{ $dish->name }}</p>
                    <img src="{{ url($dish->image) }}" alt="{{ $dish->name }}" width="150" height="150">
                    <figcaption>
                        <p class="dish-name">${{ $dish->price }}</p>
                        <a href='{{ url("dish/$dish->id/edit") }}'>Edit</a>
                    </figcaption>
                </figure>
                @empty
                    <p>You have no dishes in your menu.</p>
                @endforelse
            </div>
            <div class="menu-pagination">
                {{ $available->links() }}
            </div>
            <h1>Unavailable Menu Items</h1>
            <hr>
            <div class="menu-gallery">
                @forelse ($user->restaurantDisabledDishes as $dish)
                <figure class="dish unavailable">
                    <p class="dish-name">{{ $dish->name }}</p>
                    <img src="{{ url($dish->image) }}" alt="{{ $dish->name }}" width="150" height="150">
                    <figcaption>
                        <p class="dish-name">${{ $dish->price }}</p>
                        <a href='{{ url("dish/$dish->id/edit") }}'>Edit</a>
                    </figcaption>
                </figure>
                @empty
                    <p>You have no unavailable dishes.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection