@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }} Dashboard</div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#cart">Your Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#order_history">Order History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#user_details">User Details</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active show" id="cart">
                            @include('users.consumer.cart')
                        </div>
                        <div class="tab-pane fade" id="order_history">
                            @include('users.consumer.history')
                        </div>
                        <div class="tab-pane fade" id="user_details">
                            @include('users.user_details_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
