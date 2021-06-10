@extends('layouts.employe')
@section('content')
@if (session('deleteStage'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteStage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card mb-4">
    <div class="card-header">
        <a href="{{ route('stages.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Ajout d'un Employe</a>
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
                    @foreach ($stages as $key => $st)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $st['nom_societe'] }}</td>
                            <td>{{ $st['duree'] }}</td>
                            <td>{{ $st['type_stage'] }}</td>
                            <td>{{ $st['coordoonees'] }}</td>
                            <td>{{ $st['sujet'] }}</td>
                            <td>{{ $st['created_at'] }}</td>
                            <td>
                                <a href="{{ route('stages.edit', $st->id) }}" class="btn btn-warning" title="Edit user {{ $st->nom_stage  }}">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('stages.destroy', $st->id) }}" method="post">
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