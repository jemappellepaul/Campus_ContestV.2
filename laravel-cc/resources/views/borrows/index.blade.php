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
    <h1 class="display-3">Borrows</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Volume</td>
          <td>Begin_Borrow</td>
          <td>End_Borrow</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($borrows as $borrow)
        <tr>
            <td>{{$borrow->id}}</td>
            <td>{{$borrow->name}}</td>
            <td>{{$borrow->volume}}</td>
            <td>{{$borrow->begin_borrow}}</td>
            <td>{{$borrow->end_borrow}}</td>
            <td>
                <a href="{{ route('borrows.edit',$borrow->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('borrows.destroy', $borrow->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <div>
        <a style="margin: 19px;" href="{{ route('borrows.create')}}" class="btn btn-primary">New borrow</a>
        </div>  
    </tbody>
  </table>
<div>
</div>
@endsection