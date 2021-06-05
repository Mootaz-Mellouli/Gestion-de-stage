@extends('layouts.AdminEncadreur.adminEncadreur')
@section('content')
@if (session('storeEncadreur'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeEncadreur') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateEncadreur'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateEncadreur') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <h3><i class="fas fa-id-card"></i> Encadrants : <strong>{{ $encadreur->first_name.' '.$encadreur->last_name  }}</strong></h3>
    <div class="card" style="width: 38rem;">
        <div class="card-body">
            <ul class="list-group list-group-flush card-title">Detail d'encadrants:
                <li class="list-group-item"><i class="fas fa-user"></i> {{ $encadreur->first_name.' '.$encadreur->last_name  }}</li>
                <li class="list-group-item"><i class="fas fa-phone"></i> {{ $encadreur->phone_number }}</li>
                <li class="list-group-item"><i class="fas fa-at"></i> {{ $encadreur->email }}</li>
                <li class="list-group-item"><i class="fas fa-money-check-alt"></i> {{ $encadreur->specialty }} </li>
            </ul>
        </div>
      </div>
@endsection