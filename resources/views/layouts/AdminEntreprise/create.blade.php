@extends('layouts.AdminEntreprise.adminEntreprise')
@section('content')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i>Ajout un Employe</legend>
        <form action="{{ route('entreprises.store') }}" method="post">
            @include('layouts.AdminEntreprises.form')
        </form>
    </fieldset>
@endsection