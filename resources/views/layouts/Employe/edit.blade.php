@extends('layouts.employe')
@section('content')
    <fieldset style="margin:30px">
        <legend><i class="fas fa-user-edit"></i> Edit Stage: <strong>{{ $stages->nom_societe." | ".$stages->coordoonees }}</strong></legend>
        <form action="{{ route('stages.update', $stages->id) }}" method="post">
            @method('PUT')
            @include('layouts.Employe.stage_form')
        </form>
    </fieldset>
@endsection