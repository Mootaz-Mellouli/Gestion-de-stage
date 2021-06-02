@extends('layouts.AdminEntreprise.adminEntreprise')
@section('content')
@if (session('deleteEntreprise'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteEntreprise') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Détail d'entreprises
    </div>
    <div class="card-body">
        <a href="{{ route('employees.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Ajout d'un Entreprise</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Name Entreprise </th>
                        <th>Email Entreprise</th>
                        <th>Start Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entreprises as $key => $ent)
                        <tr>
                            <td>{{ $ent['id'] }}</td>
                            <td>{{ $ent['nom'] }}</td>
                            <td>{{ $ent['prenom'] }}</td>
                            <td>{{ $ent['email'] }}</td>
                            <td>{{ $ent['nomEntreprise'] }}</td>
                            <td>{{ $ent['emailEntreprise'] }}</td>
                            <td>{{ $ent['created_at'] }}</td>
                            <td>
                                <a href="{{ route('entreprises.show', $ent->id) }}" class="btn btn-info" title="Show details about {{ $ent->nom.' '.$ent->prenom  }}"><i class="fas fa-user-tag"></i></a>
                                <a href="{{ route('entreprises.edit', $ent->id) }}" class="btn btn-warning" title="Edit user {{ $ent->nom.' '.$ent->prenom  }}">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger" title="Delete user {{ $ent->nom.' '.$ent->prenom  }}"
                                    onclick="event.preventDefault(); document.querySelector('#delete-entreprise-form').submit()"><i class="fas fa-user-slash"></i></a>
                                <form action="{{ route('entreprises.destroy', $ent->id) }}" method="post" id="delete-entreprise-form">@csrf @method('DELETE')</form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection