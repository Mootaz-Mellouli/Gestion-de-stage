@extends('layouts.employe')
@section('content')

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <br>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-file-signature fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Lettre d'affectation</h4>
                    <p class="text-muted">La creation des les lettres d'affectation</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-male fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Ressource humaine</h4>
                    <p class="text-muted">Informations sur les avantages sociaux et le développement professionnel, et ressources pour les managers</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-user-shield fa-stack-2x text-primary"></i>
                        <i class="fas fa-file-signature fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Securité</h4>
                    <p class="text-muted">Assurer la sécurité et le bien-être de la communauté de l'Université</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Liste d'employés</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
                @foreach ($employees as $emp)
                    <div class="col-lg-4">
                        <div class="team-member">
                        <h4>{{ $emp['first_name'] }} {{ $emp['last_name'] }}</h4>
                            <p class="text-muted">Lorem ipsum</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>
@endsection