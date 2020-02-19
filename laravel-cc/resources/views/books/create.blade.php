@extends('base')
@section('main')

<!-- titre -->
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a book</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <!-- Formulaire d'ajout de livre -->
      <form method="post" action="{{ route('books.store') }}">
          @csrf
          <div class="form-group">    
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="author">Author:</label>
              <input type="text" class="form-control" name="author"/>
          </div>

          <div class="form-group">
              <label for="volume">Volume:</label>
              <input type="text" class="form-control" name="volume"/>
          </div>
          <div class="form-group">
              <label for="publication">Publication:</label>
              <input type="text" class="form-control" name="publication"/>
          </div>
          <div class="form-group">
              <label for="quantity">Quantity:</label>
              <input type="text" class="form-control" name="quantity"/>
          </div>                       
          <button type="submit" class="btn btn-primary-outline">Add book</button>
      </form>
  </div>
</div>
</div>
@endsection