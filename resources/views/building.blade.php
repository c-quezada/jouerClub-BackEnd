<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
	<title>JouerCLUB</title>

</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen" data-bg-parallax="scroll" data-bg-parallax-speed="6">
    <div class="ts-page-wrapper" id="page-top">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-hero" class="ts-full-screen">

            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top ts-separate-bg-element" data-bg-color="#fff">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">
                        <img src="assets/img/logo.png" alt="JouerCLUB" title="jouerCLUB">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="#page-top">Inicio <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link ts-scroll" href="#products">Productos</a>
                            <a class="nav-item nav-link ts-scroll" href="#what-is-jouerclub">Acerca</a>
                            <a class="nav-item nav-link ts-scroll" href="#testimonials">Testimonios</a>
                            <a class="nav-item nav-link ts-scroll" href="#our-team">Equipo</a>
                            <a class="nav-item nav-link ts-scroll" href="#form-contact">Contacto</a>
                            <a class="nav-item nav-link ts-scroll btn btn-info btn-sm text-white ml-3 px-3 ts-width__auto" href="#download">Descarga</a>
                        </div>
                        <!--end navbar-nav-->
                    </div>
                    <!--end collapse-->
                </div>
                <!--end container-->
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->
            <div class="container align-self-center">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <h3 class="ts-font-color__black ts-opacity__50">LLEVEMOS JUNTOS</h3>
                        <h1>EL DEPORTE AMATAUR AL SIGUIENTE NIVEL!</h1>
                        <a href="#how-it-works" class="btn btn-primary btn-lg ts-scroll" data-bg-color="#1b1464">Saber Más</a>
                    </div>
                    <!--end col-sm-7 col-md-7-->
                    <div class="col-sm-5 d-none d-sm-block">
                        <div class="owl-carousel text-center" data-owl-nav="1" data-owl-loop="2">
                            <img src="{{ asset('images/screenshots/create_meeting.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/login_checked.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/login.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/meeting_detail.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/meetings_404.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/profile.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/select_court.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/select_skills.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/select_teammates.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/sportfield_services.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/team_detail.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/teams_404.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                            <img src="{{ asset('images/screenshots/teams.png') }}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="image" width="360px" height="700px">
                        </div>
                    </div>
                    <!--end col-sm-5 col-md-5 col-xl-5-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->

            <div id="ts-dynamic-waves" class="ts-background">
                <svg class="ts-svg ts-z-index__1 ts-flip-x" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path class="ts-dynamic-wave" id="wave-1" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="4" data-wave-speed="0.5"/>
                </svg>
                <svg class="ts-svg ts-z-index__1" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path class="ts-dynamic-wave" id="wave-2" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="6" data-wave-speed="0.3"/>
                </svg>
                <div class="ts-background-image ts-parallax-element" data-bg-image="{{ asset('images/page/background_2.jpg') }}"></div>
            </div>

        </header>
        <!--end #hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <main id="ts-content">

            <!--HOW IT WORKS ****************************************************************************************-->
            <section id="how-it-works" class="ts-block text-center">
                <div class="container">
                    <div class="ts-title">
                        <h2>Características</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <figure data-animate="ts-fadeInUp">
                                <figure class="icon mb-5 p-2">
                                    <img src="assets/img/icon-watch-heart.png" alt="">
                                    <div class="ts-svg ts-svg__organic-shape-01" data-animate="ts-zoomInShort"></div>
                                </figure>
                                <h4>Muchas funcionalidades te esperan</h4>
                                <p>
                                    No solo es tiempo de realizar encuentros, participa en comunidades y en cientos de eventos.
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                                <figure class="icon mb-5 p-2">
                                    <img src="assets/img/icon-lcd-chart.png" alt="">
                                    <div class="ts-svg ts-svg__organic-shape-02" data-animate="ts-zoomInShort"></div>
                                </figure>
                                <h4>Simple</h4>
                                <p>
                                    Tan sencilla que aprender a usarla no será un problema.
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                            <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                                <figure class="icon mb-5 p-2">
                                    <img src="assets/img/icon-cup-winner.png" alt="">
                                    <div class="ts-svg ts-svg__organic-shape-03" data-animate="ts-zoomInShort"></div>
                                </figure>
                                <h4>Encuentros</h4>
                                <p>
                                    ¿Típico no? Planificar un encuentro y que llegue la mitad del equipo. Que los jugadores cercanos sepan de tu encuentro... en una de esas?
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END HOW IT WORKS ************************************************************************************-->

            <!--PARTNERS ********************************************************************************************-->
            <section id="partners" class="py-5 ts-block" data-bg-color="#f6f6f6">
                <!--container-->
                <div class="container">
                    <!--block of logos-->
                    <div class="d-block align-items-center text-center ts-partners ">
                        <a href="#">
                            <img src="{{ asset('images/logos/sponsor-logos.png') }}" alt="">
                        </a>
                    </div>
                    <!--end logos-->
                </div>
                <!--end container-->
            </section>
            <!--END PARTNERS ****************************************************************************************-->

            <!--HOW IT LOOKS ****************************************************************************************-->
            <section id="products" class="pb-0 ts-block text-center ts-overflow__hidden ts-shape-mask__down" data-bg-color="#ededed" data-bg-image="{{ asset('img/bg-blurred-shape.jpg') }}" data-bg-repeat="no-repeat" data-bg-position="bottom" data-bg-size="inherit">
                <div class="container">
                    <div class="ts-title">
                        <h2>Nuestros Productos</h2>
                        <h5>y tú, ¿A qué perfil perteneces?</h5>
                    </div>
                    <!--end ts-title-->

                    <ul class="nav nav-tabs justify-content-center my-5" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="desktop-tab" data-toggle="tab" href="#jouer_app" role="tab" aria-controls="jouer_app" aria-selected="true">
                                <h4>JOUER</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tablet-tab" data-toggle="tab" href="#cluber_app" role="tab" aria-controls="tablet" aria-selected="false">
                                <h4>CLUBER</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#coach_app" role="tab" aria-controls="mobile" aria-selected="false">
                                <h4>COACH</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#dev_app" role="tab" aria-controls="mobile" aria-selected="false">
                                <h4>DEV</h4>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content pt-5 ts-tabs-presentation" id="myTabContent" data-animate="ts-fadeInUp">
                        <div class="tab-pane fade show active" id="jouer_app" role="tabpanel" aria-labelledby="jouer_app">
                            <img src="{{ asset('images/screenshots/meeting_detail.png') }}" class="mw-100" width="390px" height="730px">
                        </div>
                        <div class="tab-pane fade" id="cluber_app" role="tabpanel" aria-labelledby="cluber_app">
                            <img src="{{ asset('images/screenshots/meeting_detail.png') }}" class="mw-100" width="390px" height="730px">
                        </div>
                        <div class="tab-pane fade" id="coach_app" role="tabpanel" aria-labelledby="coach_app">
                            <img src="{{ asset('images/screenshots/meeting_detail.png') }}" class="mw-100" width="390px" height="730px">
                        </div>
                        <div class="tab-pane fade" id="dev_app" role="tabpanel" aria-labelledby="dev_app">
                            <img src="{{ asset('images/screenshots/meeting_detail.png') }}" class="mw-100" width="390px" height="730px">
                        </div>
                    </div>

                </div>
            </section>
            <!--END HOW IT LOOKS ************************************************************************************-->

            <!--WHAT IS JOUERCLUB ************************************************************************************-->
            <section id="what-is-jouerclub" class="ts-block">
                <div class="container">
                    <div class="ts-title">
                        <h2>Que es jouerCLUB?</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
                            <p>
                                JouerCLUB es un sistema gestor de encuentros deportivos y actividades saludables para promover la vida sana en nuestro pais.
                            </p>
                            <a href="#download" class="btn btn-primary mb-4 ts-scroll">Usála APP!</a>
                        </div>
                        <!--end col-xl-5-->
                        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s" data-offset="100">
                            <div class="px-3">
                                <img src="assets/img/img-screen-desktop.jpg" class="mw-100 ts-shadow__lg ts-border-radius__md" alt="">
                            </div>
                        </div>
                        <!--end col-xl-7-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END WHAT IS JOUERCLUB ********************************************************************************-->

            <section id="testimonials" class="ts-block text-center" data-bg-color="#fff">
                <div class="container">
                    <div class="ts-title">
                        <h2>Testimonios</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                                <blockquote class="blockquote">
                                    <!--person image-->
                                    <figure>
                                        <aside>
                                            <i class="fa fa-quote-right"></i>
                                        </aside>
                                        <div class="ts-circle__lg" data-bg-image="{{ asset('images/testimonials/FelipeValdebenito.jpg') }}"></div>
                                    </figure>
                                    <!--end person image-->
                                    <!--cite-->
                                    <p>
                                        <em>"Mi nombre es Felipe Valdebenito, soy deportista, ando en skate y bueno, lo que opino de JouerCLUB es que es una muy buena iniciativa porque se entrega información y al mismo tiempo se nota que hay un interés de por medio para que se puedan realizar este tipo de acciones, que ya sean proyectos deportivos, actividades o juntar gente para formar algún tipo de comunidad. Me parece una muy buena iniciativa ya que siempre falta esa información."</em>
                                    </p>
                                    <!--end cite-->
                                    <!--person name-->
                                    <footer class="blockquote-footer">
                                        <h4>Felipe Valdebenito</h4>
                                        <h6>SKATER</h6>
                                    </footer>
                                    <!--end person name-->
                                </blockquote>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!--end #our-clients.ts-block-->

            <section id="download">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="p-5 text-center ts-border-radius__round-shape ts-shadow__lg" data-bg-color="#1b1464">
                                <div class="bg-white p-5 ts-border-radius__round-shape">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#">
                                                <img src="{{ asset('img/get_it_on_google.png') }}" class="mw-100 py-3" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="position-absolute ts-top__0 ts-bottom__0 m-auto w-100 ts-z-index__-1">
            </section>

            <!--OUR TEAM ********************************************************************************************-->
            <section id="our-team" class="ts-block">
                <div class="container">
                    <div class="ts-title">
                        <h2>Nuestro Equipo</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card" data-animate="ts-fadeInUp">
                                <div class="ts-card__image ts-img-into-bg">
                                    <img class="card-img-top" src="{{ asset('images/team/yerko.png') }}" alt="CEO">
                                </div>
                                <!--end ts-card__image-->
                                <div class="card-body">
                                    <h5 class="mb-1">YERKO PAILEMILLA</h5>
                                    <h6 class="ts-opacity__50">CEO - MOBILE DEVELOPER</h6>
                                </div>
                                <!--end card-body-->
                                <div class="card-footer bg-white">
                                    <div class="ts-social-icons">
                                        <a href="mailto:yerkopailemilla@gmail.com">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="https://github.com/yerkopailemilla">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="https://cl.linkedin.com/in/yerko-pailemilla-parada-776538126">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                    <!--end social-icons-->
                                </div>
                                <!--end card-footer-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-12 col-lg-6">
                            <div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
                                <div class="ts-card__image ts-img-into-bg">
                                    <img class="card-img-top" src="{{ asset('images/team/christopher.png') }}" alt="CEO">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">Christopher Quezada</h5>
                                    <h6 class="ts-opacity__50">CEO - WEB DEVELOPER</h6>
                                </div>
                                <div class="card-footer bg-white">
                                    <div class="ts-social-icons">
                                        <a href="mailto:cpqm07@gmail.com">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="https://github.com/CPQM07">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="https://cl.linkedin.com/in/christopher-quezada-409308124">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                    <!--end social-icons-->
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END OUR TEAM ****************************************************************************************-->

        </main>
        <!--end #content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        <footer id="ts-footer">

            <div class="map ts-height__600px" id="map"></div>

            <section id="contact" class="ts-separate-bg-element" data-bg-image="assets/img/bg-desk.jpg" data-bg-image-opacity=".1" data-bg-color="#1b1464">
                <div class="container">
                    <div class="ts-box mb-0 p-5 ts-mt__n-10">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Un cafecito?</h3>
                                <address>
                                    <figure>
                                        Bravo de Saravia  2980
                                        Renca, Santiago, Chile
                                    </figure>
                                    <br>
                                    <figure>
                                        <div class="font-weight-bold">Email:</div>
                                        <a href="#">support@jouer-club.cl</a>
                                    </figure>
                                    <figure>
                                        <div class="font-weight-bold">Celular:</div>
                                        +569 6224 5462
                                    </figure>
                                </address>
                                <!--end address-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-8">
                                <h3>Escribenos, mejoremos juntos!</h3>
                                <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="assets/php/email.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-name">Nombre *</label>
                                                <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="su nombre" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-email">Correo Electronico *</label>
                                                <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="ejemplo@ejemplo.cl" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                    </div>
                                    <!--end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form-contact-message">Mensaje *</label>
                                                <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Vamos! cuentanos." required></textarea>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-12 -->
                                    </div>
                                    <!--end row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Enviar</button>
                                    </div>
                                    <!--end form-group -->
                                    <div class="form-contact-status"></div>
                                </form>
                                <!--end form-contact -->
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end ts-box-->
                    <div class="text-center text-white py-4">
                        <small>© 2018 ThemeStarz, All Rights Reserved</small>
                    </div>
                </div>
                <!--end container-->
            </section>

        </footer>
        <!--end #footer-->
    </div>
    <!--end page-->

    <script>
        if( document.getElementsByClassName("ts-full-screen").length ) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('/js/popper.min.js') }}"></script>
	<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
	<script src="{{ asset('/js/isInViewport.jquery.js') }}"></script>
	<script src="{{ asset('/js/jquery.particleground.min.js') }}"></script>
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/js/scrolla.jquery.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('/js/jquery-validate.bootstrap-tooltip.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
    <script src="{{ asset('/js/jquery.wavify.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>

    <!--Google map-->

    <script>
    
        var latitude = -33.405348;z
        var longitude = -70.6848439;
        var markerImage = "{{ asset('img/map-marker.png') }}";
        var mapElement = "map";
        var mapStyle = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dbdbdb"},{"visibility":"on"}]}];
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
    </script>

</body>
</html>
