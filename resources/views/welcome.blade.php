@extends('layouts.app')

@section('content')
<div class="container">
        <div class="text-center">
            <h1 class="mt-5">Bienvenue {{$etudiant1[0]->prenom}} Dans l'application gestion de stage</h1>
        <p class="lead">Vous etes connecté avec l'email {{$etudiant[2]->email}}</p>
            <ul class="list-unstyled">
                <li>Bootstrap 4.6.0</li>
                <li>jQuery 3.5.1</li>
            </ul>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection