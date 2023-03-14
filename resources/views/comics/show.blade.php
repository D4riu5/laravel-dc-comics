@extends('layouts.app')

@section('page_title')
    DC Comics/ {{ $comic->title }}
@endsection

@section('main_section')
    <main class="my_comic">
        <div class="bg-dark text-white py-5">
            <div class="container position-relative">
                <div class="my_preview-btn my_floating">
                    <div>
                        <img class="border border-white border-4" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg'">
                        <div class="position-absolute top-0 start-0 my_tag px-2 py-1 m-1">
                            {{ strtoupper($comic->type) }}
                        </div>
                    </div>
                </div>

                <div class="py-5">
                    <div>
                        <h2>
                            {{ $comic->title }}
                        </h2>
                    </div>
                    <div class="bg-success d-flex">
                        <div class="border-end border-dark border-2 px-3 py-2 w-50">
                            Price: {{ $comic->price.' '."€" }}
                        </div>
                        <div class="px-3 py-2 w-25 border-end border-dark border-2">
                            {{ $comic->series }}
                        </div>
                        <div class="px-3 py-2 w-25">
                           On Sale Date: {{ $comic->sale_date }}
                        </div>
                    </div>
                    <div class="my-3">
                        {{ $comic->description }}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection