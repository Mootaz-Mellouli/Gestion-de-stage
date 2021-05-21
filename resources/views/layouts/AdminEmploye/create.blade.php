@extends('layouts.AdminEmploye.adminEmploye')
@section('content')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i>Ajout un Employe</legend>
        <form action="{{ route('employees.store') }}" method="post">
            @include('layouts.AdminEmploye.form')
        </form>
    </fieldset>
@endsection