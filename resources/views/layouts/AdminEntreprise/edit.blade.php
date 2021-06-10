@extends('layouts.AdminEntreprise.adminEntreprise')

@section('content')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit Entreprise: <strong>{{ $entreprise->nom." ".$entreprise->prenom }}</strong></legend>
        <form action="{{ route('entrepriseDetails.update', $entreprise->id) }}" method="post">
            @method('PUT')
            @include('layouts.AdminEntreprise.form')
        </form>

    </fieldset>
@endsection

