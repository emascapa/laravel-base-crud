@extends('layouts.app')

@section('content')

    <div class="container">

        {{-- loggo gli errori se il form viene inviato incompleto --}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('comics.store') }}" method="post"> {{-- {{route('comics.store')}} --}}

            <h2 class="text-center">Create a new Comic</h2>

            @csrf


            <div class="mb-3">
                <label for="title">comic Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                value="{{ old('title') }}">

                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">comic description</label>
                <input type="text" name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror" 
                    value="{{ old('description') }}">
            </div>

            <div class="mb-3">
                <label for="thumb">comic thumb</label>
                <input type="text" name="thumb" id="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" 
                    value="{{ old('thumb') }}">

                @error('thumb')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price">comic price</label>
                <input type="number" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" 
                    value="{{ old('price') }}">

                @error('price')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date">comic sale_date</label>
                <input type="text" name="sale_date" id="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" 
                    value="{{ old('sale_date') }}">
            </div>

            <div class="mb-5">
                <label for="type">comic type</label>
                <input type="text" name="type" id="type"
                    class="form-control @error('type') is-invalid @enderror" 
                    value="{{ old('type') }}">

                @error('type')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class=" btn btn-dark">Add comic</button>

        </form>
    </div>

@endsection
