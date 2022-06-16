@extends('layouts.app')

@section('content')

{{-- @php
    dd($comics)
@endphp --}}

<div class="container">
    <h2 class="mb-4">Our Comics</h2>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-6 g-3">

        @forelse ($comics as $comic)


        <div class="col ">
            <div class="card h-100">
                <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                <div class="card-body">
                    <h5 class="text-center">{{$comic->title}}</h5>
                    <p>Price: {{$comic->price}} $</p>

                    <a href="{{route('comics.show', $comic->id)}}">View more</a>
                </div>
            </div>
        </div>

            
        @empty
            <div class="col-12">

                <h5>No comic found</h5>

            </div>

        @endforelse

    </div>
</div>
    
@endsection