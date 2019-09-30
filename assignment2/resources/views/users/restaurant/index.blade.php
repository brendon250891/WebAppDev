@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $restaurant->name}} Menu</h1>
        <hr>
        <div class="menu-gallery" style="width:100%">
            @forelse ($dishes as $dish)
                <figure class="dish">
                    <p class="dish-name">{{ $dish->name }}</p>
                    <img src="{{ url($dish->image) }}" alt="Picture of {{ $dish->name }}" width="180" height="150">
                    <figcaption>
                        <p>${{ $dish->price }}</p>
                        @auth
                            @if (Auth::user()->userType === 'consumer')
                                <form method="post" action='{{ url("cart")}}/{{ $user->cart->id }}'>
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input type="hidden" name="dishId" value="{{ $dish->id }}">
                                    <input type="hidden" name="restaurant" value="{{ $dish->user_id }}">
                                    <button class="btn btn-primary add" data-name="{{ $dish->name }}" data-price="{{ $dish->price }}" data-id="{{ $dish->id }}">Add</button>
                                </form>
                            @endif
                        @endauth
                    </figcaption>
                </figure>            
            @empty
                <p>There are no menu items to display.</p>
            @endforelse
        </div>
        <div class="menu-pagination">
            {{ $dishes->links() }}
        </div>
        @include('users.consumer.add_dish_to_cart_modal')
    </div>
    <script>
        /*$(document).ready(function() {
            addCloseModalClick();
            $('.add').click(function() {
                setModalData($(this).attr('data-name'), $(this).attr('data-price'), $(this).attr('data-id'));
                showAddToCartModal();
            });

            $('select').change(function() {
                let price = parseFloat($('#price').text());
                let quantity = parseInt($('#quantity').val());
                let total = Math.round(((price * quantity) * 100)) / 100;
                let decimalIndex = total.toString().indexOf('.');
                let cents = total.toString().substring(decimalIndex + 1);
                let totalString = cents.length == 1 ? total.toString() + "0" : total.toString();
                $('#total').text(totalString);
            });

            $('#addToCart').click(function() {
                let dishId = $(this).data("id");
                let quantity = $('#quantity').val();
                let dish = {}
                dish['id'] = dishId;
                dish['quantity'] = quantity;
                console.log(document.cookie);
                if (localStorage['order'] == null) {

                }
            });
        });

        function addCloseModalClick() {
            $('#close').click(function() {
                resetModal();
            });
        }

        function setModalData(name, price, id) {
            $('#name').text(name);
            $('#price').text(price);
            $('#total').text(price);
            $('#addToCart').data("id", id);
        }

        function showAddToCartModal() {
            $('.modal').show();
        }

        function resetModal() {
            $('.modal').hide();
            $('#name').text("");
            $('#price').text("");
            $('#total').text("");
            $('#quantity').val('1');
        }*/

    </script>
@endsection