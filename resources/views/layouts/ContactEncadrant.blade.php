@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Numero de telephone</th>
        <th scope="col">email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($encadreurs as $key => $encadreur)
            <tr>
            <th scope="row">{{$key}}</th>
            <td >{{$encadreur -> first_name.' '.$encadreur ->last_name}}</td>
            <td >{{$encadreur -> phone_number}}</td>  
            <td >{{$encadreur -> email}}</td>    
          </tr>
      @endforeach
    
    </tbody>
  </table>
@endsection