@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row fw-bold border border-dark text-center">
        <div class="col-1">
            ID
        </div>
        <div class="col-1">
            THUMB
        </div>
        <div class="col-5">
            TITLE
        </div>
        <div class="col-2">
            DESCRIPTION
        </div>
        <div class="col-3">
            ACTIONS
        </div>
    </div>

    {{-- <div class="row row-cols-2"> --}}
        @forelse ($games as $game)
{{--             <div class="col">
                <h5>{{$game->title}}</h5>
                <p>{{$game->description}}</p>
                <img src="{{$game->thumb}}" alt="">
                <img src="{{$game->cover_image}}" alt="">
            </div> --}}
            <div class="row text-center">
                <div class="col-1 overflow-hidden">
                    {{$game->id}}
                </div>
                <div class="col-1 overflow-hidden">
                    {{$game->thumb}}
                </div>
                <div class="col-5 overflow-hidden">
                    {{$game->title}}
                </div>
                <div class="col-2 overflow-hidden">
                    {{$game->description}}
                </div>
                <div class="col-3">
                    <ul>
                        <li><a href="{{route('games.show', $game->id)}}">Visit</a></li>{{-- 
                        <li><a href="{{route('')}}">Edit</a></li>
                        <li><a href="{{route('')}}">Delete</a></li>
 --}}                    </ul>
                </div>
            </div>
        @empty
            ciaooo
        @endforelse
    </div>
</div>
    
@endsection