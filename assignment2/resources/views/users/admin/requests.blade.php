@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Restaurants Pending Approval</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Restaurant Name</th>
                        <th>Applied</th>
                        <th>Approve</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($requests as $request)
                    <tr>
                        <td>{{ $request->name }}</th>
                        <td>{{ $request->created_at }}</th>
                        <td>
                            <form method="post" action="{{ url("user/$request->id") }}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <input type="hidden" name="approved" value="approved">
                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2">There are no restauarants pending approval.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection