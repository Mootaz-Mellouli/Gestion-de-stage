<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Encadrant - ISET Bizerte</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/styleEmploye.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap-min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/pdf.css') }}" />


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" style="color:white;letter-spacing:3px" href="#page-top"><img src="../employeImages/navbar-logo.png" style="height:50px;" alt="logo" />ISET Bizerte</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('encadreur') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('encadreur.pfe') }}">PFE</a></li>
           
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        @if (Auth::user()->role != 0)
                                        <a class="dropdown-item" href="{{ route('encadreurDetails.index') }}">Dashboard</a>
                                        @endif
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">Espace PFE</div>
            </div>
        </header>
        <section class="page-section" id="services">
            <div class="container">
            <form method="POST" enctype="multipart/form-data" action="{{route('fileupload.store')}}">
            @csrf
             <div class="form-group">
                 <div style=" padding-top: 60px; margin-left:460px;  color:white;">
           <label for="exampleFormControlFile1">Insérer votre PFE ici:</label>
           <input  type="file" class="form-control-file" name="uploadedfile" id="exampleFormControlFile1">
                 </div>
           <div style="margin-top:20px;text-align:center; padding:20px;"  class="form-group"><button class="btn btn-success">Télécharger votre PFE</button></div>
           @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        </div>
    </div>

@endif

             </div>
             
            </form>
            
           </div>
           <h5>Cette fiche fournit quelques conseils de rédaction d’un mémoire. Elle est valable aussi bien pour un rapport de stage <br>que pour un mémoire de PFE.<h5>
             <a href="/download" class="button">Download Now</a>   
        </section>
        </body>
        </html>