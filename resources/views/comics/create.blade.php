@extends('layouts.app')

@section('content')

<div class="container">
    <form action="" method="post"> {{-- {{route('comics.store')}} --}}

        @csrf
    
        <div class="mb-3">
            <label for="title">comic Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description">comic description</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="mb-3">
            <label for="thumb">comic thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price">comic price</label>
            <input type="number" name="price" id="price" class="form-control">
        </div>
        <div class="mb-3">
            <label for="sale_date">comic sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control">
        </div>
        <div class="mb-5">
            <label for="type">comic type</label>
            <input type="text" name="type" id="type" class="form-control">
        </div>
    
        <button type="submit" class=" btn btn-dark">Add comic</button>
    
    </form>
</div>
    
@endsection