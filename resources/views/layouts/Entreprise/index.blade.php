@extends('layouts.entreprise')
@section('title')
Gestion de Stage
@endsection
@section('content')
@if (session('deleteEntrepriseStage'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteEntrepriseStage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card mb-4">
    <div class="card-header">
        <a href="{{ route('entrepriseStages.create') }}" class="btn btn-danger float-right"><i class="fas fa-user-plus"></i> Ajout d'un Stage</a>
        <i class="fas fa-table mr-1"></i>
        Détail des stages
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom societé</th>
                        <th>Duree</th>
                        <th>Type</th>
                        <th>Detail</th>
                        <th>Sujet</th>
                        <th>Created At</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entrepriseStages as $key => $ec)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $ec['nom_societe'] }}</td>
                            <td>{{ $ec['duree'] }}</td>
                            <td>{{ $ec['type_stage'] }}</td>
                            <td>{{ $ec['coordoonees'] }}</td>
                            <td>{{ $ec['sujet'] }}</td>
                            <td>{{ $ec['created_at'] }}</td>
                            <td>
                                <a href="{{ route('entrepriseStages.edit', $st->id) }}" class="btn btn-warning" title="Edit stage">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('entrepriseStages.destroy', $st->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete stage"><i class="fas fa-user-slash"></i></button>
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