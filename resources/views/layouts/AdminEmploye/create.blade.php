@extends('layouts.AdminEmploye.adminEmploye')
@section('content')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i>Ajout un Employe</legend>
        <form action="{{ route('employeDetails.store') }}" method="post">
            @include('layouts.AdminEmploye.form')
        </form>
    </fieldset>
@endsection