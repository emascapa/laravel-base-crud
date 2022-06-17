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
        
        <h2 class="text-center mb-5">You are editing the comic "{{ $comic->title }}"</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="post"> {{-- {{ route('comics.update', $comic->id) }} --}}


            @csrf

            @method('PUT')


            <div class="mb-3">
                <label for="title">comic Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                value="{{ $comic->title }}">

                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">comic description</label>
                <input type="text" name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror" 
                    value="{{ $comic->description }}">
            </div>

            <div class="mb-3">
                <label for="thumb">comic thumb</label>
                <input type="text" name="thumb" id="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" 
                    value="{{ $comic->thumb }}">

                @error('thumb')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price">comic price</label>
                <input type="number" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" 
                    value="{{ $comic->price }}">

                @error('price')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date">comic sale_date</label>
                <input type="text" name="sale_date" id="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" 
                    value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-5">
                <label for="type">comic type</label>
                <input type="text" name="type" id="type"
                    class="form-control @error('type') is-invalid @enderror" 
                    value="{{ $comic->type }}">

                @error('type')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class=" btn btn-primary">Update comic</button>

        </form>
    </div>

@endsection
