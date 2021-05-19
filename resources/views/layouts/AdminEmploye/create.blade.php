@extends('layouts.AdminEmploye.adminEmploye')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i> Add new Employe</legend>
        <form action="{{ route('layouts.AdminEmploye.store') }}" method="post">
            @include('layouts.AdminEmploye.form')
        </form>
    </fieldset>
@endsection