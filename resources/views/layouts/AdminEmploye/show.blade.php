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
    <h3><i class="fas fa-id-card"></i> Details about Employe : <strong>{{ $employe->first_name.' '.$employe->last_name  }}</strong></h3>
    <div class="card" style="width: 38rem;">
        <div class="card-body">
            <h5 class="card-title"><i class="fas fa-user"></i> <strong>{{ $employe->first_name.' '.$employe->last_name  }}</strong></h5>
            <ul class="list-group list-group-flush">Details:
                <li class="list-group-item"><i class="fas fa-phone"></i> {{ $employe->phone_number }}</li>
                <li class="list-group-item"><i class="fas fa-at"></i> {{ $employe->email }}</li>
            </ul>
        </div>
      </div>
@endsection