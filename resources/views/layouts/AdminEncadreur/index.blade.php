@extends('layouts.AdminEncadreur.adminEncadreur')
@section('content')
@if (session('deleteEncadreur'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteEncadreur') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card mb-4">
    <div class="card-header">
        <a href="{{ route('encadreurDetails.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Ajout d'un Encadrant</a>
        <i class="fas fa-table mr-1"></i>
        Détail d'encadrants
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>specialité</th>
                        <th>Start date</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($encadreurs as $key => $enc)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $enc['first_name'] }}</td>
                            <td>{{ $enc['last_name'] }}</td>
                            <td>{{ $enc['phone_number'] }}</td>
                            <td>{{ $enc['email'] }}</td>
                            <td>{{ $enc['specialty'] }}</td>
                            <td>{{ $enc['created_at'] }}</td>
                            <td>
                                <a href="{{ route('encadreurDetails.show', $enc->id) }}" class="btn btn-info" title="Show details about {{ $enc->first_name.' '.$enc->last_name  }}"><i class="fas fa-user-tag"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('encadreurDetails.edit', $enc->id) }}" class="btn btn-warning" title="Edit user {{ $enc->first_name.' '.$enc->last_name  }}">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('encadreurDetails.destroy', $enc->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete user {{ $enc->first_name.' '.$enc->last_name }}"><i class="fas fa-user-slash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection