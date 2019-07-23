@extends('layouts.master')

@section('title')
    Search Results
@endsection

@section('content')
    <p>Showing search results for: "{{ $query }}"</p>

    <table class="bordered">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>From</th>
            <th>To</th>
            <th>Duration</th>
            <th>Party</th>
            <th>State</th>
        </tr>
        @forelse($pms as $pm => $value)
            <tr>
                <td>{{ $value['index'] }}</td>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['from'] }}</td>
                <td>{{ $value['to'] }}</td>
                <td>{{ $value['duration'] }}</td>
                <td>{{ $value['party'] }}</td>
                <td>{{ $value['state'] }}</td>
            </tr>
        @empty
            <tr>
                <td class="no-result" colspan=8>No Results Returned</td>
            </tr>
        @endforelse
    </table>
    <p><a href="{{ url('/') }}">New search</p>
@endsection