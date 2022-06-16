@extends('layouts.app')

@section('content')

{{-- @php
    dd($comic)
@endphp --}}

<div class="container">
    
    
    <div class="rounded p-3 border border-2 d-flex flex-column align-items-center">
        
        <img class="img-fluid mb-2" src="{{$comic->thumb}}" alt="">
        
        <h2 class="mb-2 text-center">{{$comic->title}}</h2>

        <p class="mb-2 lead">{{$comic->description}}</p>

        <span class="mb-2">Series: {{$comic->series}}</span>

        <span class="mb-2">Sale Date: {{$comic->sale_date}}</span>

        <span class="mb-2">Price: {{$comic->price}}</span>

    </div>

</div>
    
@endsection