@extends('layouts.entreprise')
@section('content')
@if (session('deleteEntepriseStage'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteEntrepriseStage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card mb-4">
    <div class="card-header">
        <a href="{{ route('entrepriseStages.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Ajout d'un Employe</a>
        <i class="fas fa-table mr-1"></i>
        Détail des stages
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Duree</th>
                        <th>Type</th>
                        <th>Detail</th>
                        <th>Sujet</th>
                        <th>Created At</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entrepriseStage as $key => $es)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $es['nom_societe'] }}</td>
                            <td>{{ $es['duree'] }}</td>
                            <td>{{ $es['type_stage'] }}</td>
                            <td>{{ $es['coordoonees'] }}</td>
                            <td>{{ $es['sujet'] }}</td>
                            <td>{{ $es['created_at'] }}</td>
                            <td>
                                <a href="{{ route('entrepriseStages.edit', $st->id) }}" class="btn btn-warning" title="Edit user {{ $st->nom_stage  }}">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('entrepriseStages.destroy', $st->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete user {{ $st->nom_stage }}"><i class="fas fa-user-slash"></i></button>
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