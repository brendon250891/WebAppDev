@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Order History</h1>
        <hr>
            <div class="orders">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Order Number</th>
                            <th scope="col">Date Placed</th>
                            <th scope="col">Items</th>
                            <th scope="col">Restaurant</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($orders as $order)
                    <tr class="clickable-row" data-id="{{ $order->id }}">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ 1 }}</td>
                        <td>{{ $order->restaurant->name }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">You have not place any orders yet.</td>
                    </tr>                     
                    </tbody>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.clickable-row').click(function() {
            let orderId = $(this).data('id');
            window.location.replace(`http://s5118885.elf.ict.griffith.edu.au/assignment2/public/order/${orderId}`);
        });
    });
</script>
@endsection