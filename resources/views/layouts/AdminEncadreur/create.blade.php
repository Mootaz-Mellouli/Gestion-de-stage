@extends('layouts.AdminEncadreur.adminEncadreur')
@section('content')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i>Ajout un Encadrant</legend>
        <form action="{{ route('encadreurDetails.store') }}" method="post">
            @include('layouts.AdminEncadreur.form')
        </form>
    </fieldset>
@endsection