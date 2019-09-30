@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href='{{ url("user/$dish->user_id") }}'>Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Dish</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit - {{ $dish->name }}</h1>
                <hr>
                    <form method="post" action="{{ url("dish/$dish->id") }}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       {{ method_field('PUT') }}
                        <div class="form-group">
                            <label class="form-control-label">Dish Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $dish->name }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $dish->price }}">
                            @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                             <input type="checkbox" name="available" @if($dish->available === '1') checked @endif>
                             <label class="form-control-label">Available</label>
                        </div>
                        <div>
                             <label class="form-control-label">Change Image</label> <br />
                             <input type="file" name="image">
                             @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                         </div> <br />
                         <input type="hidden" name="restaurant" value="{{ $dish->user_id }}">
                         <button type="submit" class="btn btn-success">Edit Dish</button>
                    </form>
               </div>
            </div>
        </div>
    </div>
@endsection