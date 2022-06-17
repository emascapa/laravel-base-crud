@extends('layouts.app')

@section('content')
    {{-- @php
    dd($comics)
@endphp --}}

    <div class="container">
        <h2 class="mb-4">Our Comics</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-3">

            @forelse ($comics as $comic)
                <div class="col ">
                    <div class="card h-100">
                        <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
                        <div class="card-body d-flex flex-column justify-content-between">

                            <div class="infos text-center">
                                <h5>{{ $comic->title }}</h5>
                                <p>Price: {{ $comic->price }} $</p>
                            </div>

                            <div class="actions d-flex justify-content-center">
                                <a class="mx-1 btn btn-info" href="{{ route('comics.show', $comic->id) }}"><i
                                        class="fa-solid fa-folder-open"></i></a>

                                <a class="mx-1 btn btn-warning" href="{{ route('comics.edit', $comic->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>

                                <!-- Button trigger modal -->
                                <button type="button" class="mx-1 btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-comic-{{ $comic->id }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="delete-comic-{{ $comic->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Comic</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to delete "{{ $comic->title }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save</button> --}}

                                            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">

                                                @csrf

                                                @method('DELETE')

                                                <button class="btn btn-danger" type="submit">Eliminami</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



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
