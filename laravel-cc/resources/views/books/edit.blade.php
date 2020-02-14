@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a book</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('books.update', $book->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" class="form-control" name="type" value={{ $book->type }} />
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $book->name }} />
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" name="author" value={{ $book->author }} />
            </div>

            <div class="form-group">
                <label for="volume">Volume:</label>
                <input type="text" class="form-control" name="volume" value={{ $book->volume }} />
            </div>
            <div class="form-group">
                <label for="publication">Publication:</label>
                <input type="text" class="form-control" name="publication" value={{ $book->publication }} />
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" class="form-control" name="quantity" value={{ $book->quantity }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection