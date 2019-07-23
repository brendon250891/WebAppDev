@extends('layouts.master')

@section('title')
    Australian Prime Ministers
@endsection

@section('content')
    {{ csrf_field() }}
    <form method="get" action="search">
        <p>Name:<input type="text" name="name"></p>
        <p>Year:<input type="text" name="year"></p>
        <p>State:<input type="text" name="state"></p>
        <input type="submit" value="Search"><input type="reset" value="Reset">
    </form>
@endsection