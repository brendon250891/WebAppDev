@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Sales statistics for {{ $user->name }}</h1>
            <hr>
            <h4>Total Sales</h4>
            <hr>
            <p>Since joining you have made: ${{ $user->restaurantSalesStatistics()->total }}</p>
            <p>Since joining you have sold {{ $user->restaurantSalesStatistics()->count }} dishes</p>
            <h4>Weekly Sales Totals</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Week</th>
                        <th>Total</th>
                    </tr>
                </th>
                <tbody>
                    @forelse($weeklyTotals as $key=>$weekTotal)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $weekTotal->total }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td>There is insufficient data to display any results.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection