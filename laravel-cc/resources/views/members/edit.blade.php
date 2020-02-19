@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <!-- titre -->
        <h1 class="display-3">Update a member</h1>

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
        <!-- formulaire d'édition de membre reprenant au
            naturel les informations du membre à modifier -->
        <form method="post" action="{{ route('members.update', $member->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $member->name }} />
            </div>

            <div class="form-group">
                <label for="author">Email:</label>
                <input type="text" class="form-control" name="author" value={{ $member->email }} />
            </div>

            <div class="form-group">
                <label for="volume">Password:</label>
                <input type="text" class="form-control" name="volume" value={{ $member->password }} />
            </div>  
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection