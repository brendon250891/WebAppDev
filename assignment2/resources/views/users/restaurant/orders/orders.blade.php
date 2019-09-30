@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Pending Orders</h1>
        <hr>
            <div class="orders">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Order Number</th>
                            <th scope="col">Date Placed</th>
                            <th scope="col">Items</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($pendingOrders as $order)
                    <tr class="clickable-row" data-id="{{ $order->id }}">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ 1 }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">There are no pending orders to display.</td>
                    </tr>                     
                    </tbody>
                    @endforelse
                </table>
            </div>
            <h1>Completed Orders</h1>
        <hr>
            <div class="orders">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Order Number</th>
                            <th scope="col">Date Placed</th>
                            <th scope="col">Items</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($completedOrders as $order)
                    <tr class="clickable-row" data-id="{{ $order->id }}">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ 1 }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">There are no completed orders to display.</td>
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