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
                        @if ($comic->thumb)
                            <img class="border border-white border-4" src="{{ $comic->thumb }}" alt="{{ $comic->title }}" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg'">
                        @else
                        <img class="border border-white border-4" src="https://static.posters.cz/image/1300/poster/dc-comics-rebirth-i80856.jpg" alt="Placeholder image">
                        @endif
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

                    <div class="container-fluid">
                        <div class="row bg-success">
                            <div class="col-4 border-end border-dark border-2 px-3 py-2">
                                Price: {{ $comic->price.' '."€" }}
                            </div>
                            <div class="col-4 px-3 py-2 border-end border-dark border-2 text-center">
                                {{ $comic->series }}
                            </div>
                            <div class="col-4 px-3 py-2 text-end">
                                On Sale Date: {{ $comic->sale_date }}
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        {{ $comic->description }}
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="d-flex justify-content-center py-2 mx-3">
                        <a href="{{ route('comics.edit' , $comic->id) }}">
                            <button  class="btn rounded-0 btn-warning py-2 px-5">
                                EDIT COMIC
                            </button>
                        </a>
                    </div>
    
                    <div class="d-flex justify-content-center py-2 mx-3">
                        <button  class="btn rounded-0 btn-danger py-2 px-5" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                            DELETE COMIC
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade text-dark" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">
                                    Are you sure?
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                Press Save changes if you are sure you want to delete this comic. 
                                Changes are irreversible!
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                                
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    
                                    @csrf
                                    
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        Save changes
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>

    </main>
@endsection