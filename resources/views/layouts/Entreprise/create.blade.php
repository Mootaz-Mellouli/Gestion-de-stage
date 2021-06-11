@extends('layouts.entreprise')
@section('content')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i>Ajout un Stage</legend>
        <form action="{{ route('entrepriseStages.store') }}" method="post">
            @include('layouts.Entreprise.eS_form')
        </form>
    </fieldset>
@endsection