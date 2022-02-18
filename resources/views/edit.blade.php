@extends('/layouts/app')
@section('title', 'Edit')

@section('content')
    <h1 class="container">Edit Book</h1>
    <form class="container" action="{{ url('edit/' . $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" value="{{ $book->title }}" class="form-control @error('title') is-invalid @enderror"
                id="title" name="title" placeholder="Title...">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" value="{{ $book->author }}" class="form-control @error('author') is-invalid @enderror"
                id="author" name="author" placeholder="Author...">
            @error('author')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="number" value="{{ $book->pages }}" min="1"
                class="form-control @error('pages') is-invalid @enderror" id="pages" name="pages" placeholder="Pages...">
            @error('pages')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="releaseDate" class="form-label">Release Date</label>
            <input type="date" value="{{ $book->release_date }}"
                class="form-control @error('releaseDate') is-invalid @enderror" id="releaseDate" name="releaseDate">
            @error('releaseDate')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
