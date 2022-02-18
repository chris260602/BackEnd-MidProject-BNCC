@extends('/layouts/app')
@section('title', 'Home')

@section('content')
    <h1 class="container">Home</h1>
    <div class="container">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="card col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $book->pages }} pages</h6>
                            <p class="card-text">Created by: {{ $book->author }}</p>
                            <p class="card-text">Created at: {{ $book->release_date }}</p>
                            <a href="edit/{{ $book->id }}" class="card-link">Edit</a>
                            <a href="delete/{{ $book->id }}" class="card-link"
                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $book->id }}').submit();">Delete
                                <form id="delete-form-{{ $book->id }}" action='{{ 'delete/' . $book->id }}'
                                    method="POST" style="display: none;" @csrf @method('DELETE')></form>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
