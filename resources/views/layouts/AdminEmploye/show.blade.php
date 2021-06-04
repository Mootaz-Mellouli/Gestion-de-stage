@extends('layouts.AdminEmploye.adminEmploye')
@section('content')
@if (session('storeEmploye'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeEmploye') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateEmploye'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateEmploye') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <h3><i class="fas fa-id-card"></i> Employe : <strong>{{ $employe->first_name.' '.$employe->last_name  }}</strong></h3>
    <div class="card" style="width: 38rem;">
        <div class="card-body">
            <ul class="list-group list-group-flush card-title">Detail d'employe:
                <li class="list-group-item"><i class="fas fa-user"></i> {{ $employe->first_name.' '.$employe->last_name  }}</li>
                <li class="list-group-item"><i class="fas fa-phone"></i> {{ $employe->phone_number }}</li>
                <li class="list-group-item"><i class="fas fa-at"></i> {{ $employe->email }}</li>
                <li class="list-group-item"><i class="fas fa-money-check-alt"></i> {{ $employe->salaire }} TND/Mois</li>
            </ul>
        </div>
      </div>
@endsection