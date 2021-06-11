@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<h2>Liste des stages </h2>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom de la societe</th>
        <th scope="col">duree</th>
        <th scope="col">type de stage</th>
        <th scope="col">coordoonees</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($stages as $key => $stage)
            <tr>
            <th scope="row">{{$key}}</th>
            <td >{{$stage -> nom_societe}}</td>
            <td >{{$stage -> duree}}</td>  
            <td >{{$stage -> type_stage}}</td>    
            <td >{{$stage -> coordoonees}}</td> 
            
          </tr>
      @endforeach
    
    </tbody>
  </table>
@endsection