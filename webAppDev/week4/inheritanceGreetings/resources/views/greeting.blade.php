@extends('layouts.master')

@section('title')
    Greetings {{ $name }}
@endsection

@section('content')
    <p>Hello {{ $name }}.
    Next year, you will be {{ $age }} years old.
@endsection