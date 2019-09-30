@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Participating Restuarants</h1>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Restaurant</th>
                    <th scope="col">Consumer Rating</th>
                    <th scope="col">Popularity</th>
                </tr>
            </thead>
            @forelse ($restaurants as $restaurant)
                <tr class="click-row" data-id="{{ $restaurant->id }}">
                    <td>{{ $restaurant->name }}</td>
                    <td>3/5</td>
                    <td>80%</td>
                </tr>
                @empty
                    <tr>
                        <td colspan=3>There are no restaurants to display</td>
                    </tr>
                @endforelse
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('.click-row').click(function() {
                let id = $(this).attr('data-id');
                window.location.replace(`http://s5118885.elf.ict.griffith.edu.au/assignment2/public/restaurant/${id}`)
            });
        });
    </script>
@endsection