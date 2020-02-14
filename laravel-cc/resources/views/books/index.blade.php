@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
    <h1 class="display-3">Books</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Type</td>
          <td>Name</td>
          <td>Author</td>
          <td>Volume</td>
          <td>Publication</td>
          <td>Quantity</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->type}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->volume}}</td>
            <td>{{$book->publication}}</td>
            <td>{{$book->quantity}}</td>
            <td>
                <a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <div>
        <a style="margin: 19px;" href="{{ route('books.create')}}" class="btn btn-primary">New book</a>
        </div>  
    </tbody>
  </table>
<div>
</div>
@endsection