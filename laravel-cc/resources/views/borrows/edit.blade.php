@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a borrow</h1>

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
        <form method="post" action="{{ route('borrows.update', $borrow->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $borrow->name }} />
            </div>

             <div class="form-group">
                <label for="id_book">id_book:</label>
                <input type="text" class="form-control" name="name" value={{ $borrow->name }} />
            </div>

            <div class="form-group">
                <label for="volume">Volume:</label>
                <input type="text" class="form-control" name="volume" value={{ $borrow->volume }} />
            </div>
            <div class="form-group">
                <label for="begin_borrow">Begin_borrow:</label>
                <input type="text" class="form-control" name="begin_borrow" value={{ $borrow->begin_borrow }} />
            </div>
            <div class="form-group">
                <label for="end_borrow">End_borrow:</label>
                <input type="text" class="form-control" name="end_borrow" value={{ $borrow->end_borrow }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection