@extends('layouts.employe')
@section('content')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i>Ajout un Stage</legend>
        <form action="{{ route('stages.store') }}" method="post">
            @include('layouts.Employe.stage_form')
        </form>
    </fieldset>
@endsection