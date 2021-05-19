@extends('layouts.AdminEmploye.adminEmploye')

@section('main')
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
            <hr>
            <a href="{{ route('employees.edit', $employe->id) }}" class="btn btn-warning" title="Edit user {{ $employe->first_name.' '.$employe->last_name  }}">
                <i class="fas fa-user-edit"></i>
            </a>
            <a href="#" class="btn btn-danger" title="Delete user {{ $employe->first_name.' '.$employe->last_name  }}"
                onclick="event.preventDefault(); document.querySelector('#delete-employe-form').submit()"
                ><i class="fas fa-user-slash"></i></a>
            <form action="{{ route('employees.destroy', $employe->id) }}" method="post" id="delete-employe-form">@csrf @method('DELETE')</form>
        </div>
      </div>
@endsection