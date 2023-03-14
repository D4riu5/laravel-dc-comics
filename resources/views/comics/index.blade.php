@extends('layouts.app')

@section('page_title')
    DC Comics
@endsection

@section('main_section')
    <main class="my_comics">
        <div class="bg-dark text-white pt-5 pb-3">
            <div class="container position-relative">
                <div class="my_preview-btn my_floating py-2 px-4 ">
                    CURRENT SERIES
                </div>
                <div>
                    <div class="my_cards d-flex flex-wrap">
                        @foreach ($comics as $comic)
                            <div class="my_card px-3">
                                <div>
                                    <a href="{{ route('comics.show' , $comic->id) }}">
                                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg'">
                                    </a>
                                </div>
                                <h5 class="py-2">
                                    <a class="text-decoration-none text-white" href="{{ route('comics.show' , $comic->id) }}">
                                        {{ $comic['title'] }} 
                                    </a>
                                </h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-2">
                <div class="my_preview-btn py-2 px-5">
                    LOAD MORE
                </div>
            </div>
        </div>

    </main>
@endsection