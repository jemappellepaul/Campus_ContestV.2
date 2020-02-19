@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">

<!-- vérification de session -->
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<!-- titre -->
<div class="col-sm-12">
    <h1 class="display-3">Members</h1>    
  <table class="table table-striped">
    <thead>
         <!-- noms des champs -->
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>email</td>
          <td>password</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
        <!-- récupération des informations de la
        base de données pour chaque membre -->
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->password}}</td>
            <!-- boutton d'édition de membre-->
            <td>
                <a href="{{ route('members.edit',$member->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <!-- boutton de suppression de membre -->
            <td>
                <form action="{{ route('members.destroy', $member->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection