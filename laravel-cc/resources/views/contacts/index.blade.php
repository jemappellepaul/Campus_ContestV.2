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
    <h1 class="display-3">Contacts</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <!-- noms des champs -->
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>City</td>
          <td>Country</td>
          <td>Message</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
          <!-- récupération des informations de la base de
          données pour chaque message de contact -->
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td>{{$contact->message}}</td>
            <td>
              <!-- boutton de suppression -->
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
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