@extends('layouts.entreprise')
@section('content')
    <fieldset style="margin:30px">
        <legend><i class="fas fa-user-edit"></i> Edit Stage: <strong>{{ $entrepriseStages->nom_societe." | ".$entrepriseStages->coordoonees }}</strong></legend>
        <form action="{{ route('stages.update', $stages->id) }}" method="post">
            @method('PUT')
            @include('layouts.Entreprise.eS_form')
        </form>
    </fieldset>
@endsection