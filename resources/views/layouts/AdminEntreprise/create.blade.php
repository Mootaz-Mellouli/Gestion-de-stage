@extends('layouts.AdminEntreprise.adminEntreprise')
@section('content')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i>Ajout un Entreprise</legend>
        <form action="{{ route('entrepriseDetails.store') }}" method="post">
            @include('layouts.AdminEntreprise.form')
        </form>
    </fieldset>
@endsection