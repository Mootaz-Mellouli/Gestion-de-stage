@extends('layouts.AdminEncadreur.adminEncadreur')

@section('content')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit Encadrant: <strong>{{ $encadreur->first_name." ".$encadreur->last_name }}</strong></legend>
        <form action="{{ route('encadreurDetails.update', $encadreur->id) }}" method="post">
            @method('PUT')
            @include('layouts.AdminEncadreur.form')
        </form>
    </fieldset>
@endsection