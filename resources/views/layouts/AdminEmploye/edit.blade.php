@extends('layouts.AdminEmploye.adminEmploye')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit Customer: <strong>{{ $employe->first_name." ".$employe->last_name }}</strong></legend>
        <form action="{{ route('employees.edit', $employe->id) }}" method="post">
            @method('PUT')
            @include('layouts.AdminEmploye.form')
        </form>
    </fieldset>
@endsection