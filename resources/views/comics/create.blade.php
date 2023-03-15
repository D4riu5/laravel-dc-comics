@extends('layouts.app')

@section('page_title')
    DC Comics/Create
@endsection

@section('main_section')
    <main>
        <div class="bg-dark text-white pt-5 pb-3">
            <div class="container position-relative">
                <div class="my_preview-btn my_floating py-2 px-4 ">
                    ADD A NEW COMIC
                </div>
                <div>
                    <div class="container my_cards w-50">
                        <form action="{{ route('comics.store') }}" method="POST">

                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">
                                    Title *
                                </label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Insert title..." required maxlength="128">
                            </div>
                            <div class="mb-3">
                                <label for="thumb" class="form-label">
                                    Image Link
                                </label>
                                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert link..." maxlength="255">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">
                                    Description
                                </label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">
                                    Price *
                                </label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Insert price..." required minlength="1" step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="series" class="form-label">
                                    Series * 
                                </label>
                                <input type="text" class="form-control" id="series" name="series" placeholder="Insert series (Batman, Aquaman, etc)..." required maxlength="64">
                            </div>
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">
                                    Sale Date *
                                </label>
                                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="yyyy-mm-dd" required format="yyyy-mm-dd">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">
                                    Type * 
                                </label>
                                <input type="text" class="form-control" id="type" name="type" placeholder="Insert type (comic book, graphic novel, etc)..." required maxlength="64">
                            </div>

                            <div class="d-flex justify-content-center py-2">
                                <button type="submit" class="btn my_blue_btn rounded rounded-0 my_preview-btn py-2 px-5">
                                    ADD COMIC
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="fs-6">
                        * camps are required
                    </div>
                </div>

            </div>
        </div>

    </main>
@endsection