@extends('layouts.AdminEntreprise.adminEntreprise')
@section('content')
@if (session('storeEntreprise'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeEntreprise') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateEntreprise'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateEntreprise') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <h3><i class="fas fa-id-card"></i> Details about Entreprise : <strong>{{ $entreprise->nom.' '.$entreprise->prenom  }}</strong></h3>
    <div class="card" style="width: 38rem;">
        <div class="card-body">
            <h5 class="card-title"><i class="fas fa-user"></i> <strong>{{ $entreprise->nom.' '.$entreprise->prenom  }}</strong></h5>
            <ul class="list-group list-group-flush">Details:
                <li class="list-group-item"><i class="fas fa-at"></i> {{ $entreprise->email }}</li>                
                <li class="list-group-item"><i class="fas fa-user"></i> {{ $entreprise->nomEntreprise }}</li>
                <li class="list-group-item"><i class="fas fa-at"></i> {{ $entreprise->emailEntreprise }}</li>
            </ul>
        </div>
      </div>
@endsection