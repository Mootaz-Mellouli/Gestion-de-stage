@extends('layouts.AdminEmploye.adminEmploye')

@section('content')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit Employe: <strong>{{ $employe->first_name." ".$employe->last_name }}</strong></legend>
        <form action="{{ route('employeDetails.update', $employe->id) }}" method="post">
            @method('PUT')
            @include('layouts.AdminEmploye.form')
        </form>
    </fieldset>
@endsection