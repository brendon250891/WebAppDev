@extends('layouts.app')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href='{{ url("user/$user->id") }}'>Menu</a></li>
        <li class="breadcrumb-item active">Add Dish</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Add New Dish</h1>
            <hr>
            <div class="form-layout">
                <form method="post" action="{{ url('dish') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="hidden" value="{{ $user->id }}" name="restaurant">
                    <div class="form-group">
                        <label class="form-control-label">Dish Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter name" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Enter price" value="{{ old('price') }}">
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Upload Image</label> <br />
                        <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-success">Add Dish</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection