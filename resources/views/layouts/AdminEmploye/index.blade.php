@extends('layouts.AdminEmploye.adminEmploye')
@section('content')
@if (session('deleteEmploye'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteEmploye') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Détail d'employes
    </div>
    <div class="card-body">
        <a href="{{ route('employees.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Ajout d'un Employe</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Start date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $key => $emp)
                        <tr>
                            <td>{{ $emp['id'] }}</td>
                            <td>{{ $emp['first_name'] }}</td>
                            <td>{{ $emp['last_name'] }}</td>
                            <td>{{ $emp['phone_number'] }}</td>
                            <td>{{ $emp['email'] }}</td>
                            <td>{{ $emp['created_at'] }}</td>
                            <td>
                                <a href="{{ route('employees.show', $emp->id) }}" class="btn btn-info" title="Show details about {{ $emp->first_name.' '.$emp->last_name  }}"><i class="fas fa-user-tag"></i></a>
                                <a href="{{ route('employees.edit', $emp->id) }}" class="btn btn-warning" title="Edit user {{ $emp->first_name.' '.$emp->last_name  }}">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger" title="Delete user {{ $emp->first_name.' '.$emp->last_name  }}"
                                    onclick="event.preventDefault(); document.querySelector('#delete-employe-form').submit()"><i class="fas fa-user-slash"></i></a>
                                <form action="{{ route('employees.destroy', $emp->id) }}" method="post" id="delete-employe-form">@csrf @method('DELETE')</form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection