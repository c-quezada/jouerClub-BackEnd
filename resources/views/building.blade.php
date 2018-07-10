<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>{{ config('app.name') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#0c97c3">
    <link rel="icon" type="image/png" href="{{ asset('images/logos/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="JouerCLUB - APP para encuentros y administacion de instalaciones deportivas">
    <meta name="keywords" content="Encuentros, APP, Chile, Pichanga, Cancha, Recinto, Horario, Disponible">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logos/jouer-shape.png') }}" class="img-fluid" alt="{{ config('app.name') }}" width="25%"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">INICIO <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">CARACTERÍSTICAS</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#testimonials">TESTIMONIOS</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALERÍA</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACTO</a> </li>
                                <li class="nav-item"><a href="#download" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">DESCARGAR</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>{{ config('app.name') }}</h1>
            <p class="tagline">Donde quiera que estés, JOUER es <strong>JUGAR</strong>. </p>
        </div>
        <div class="img-holder mt-3"><img src="{{ asset('images/screenshots/initial.png') }}" width="420" alt="phone" class="img-fluid"></div>
    </header>

    <div class="client-logos my-5">
        <div class="container text-center">
            <img src="{{ asset('images/logos/sponsor-logos.png') }}" alt="client logos" class="img-fluid">
        </div>
    </div>

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>DESTACADAS</small>
                <h3>Características por y para ti</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-heart gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Muchas funcionalidades te esperan</h4>
                                    <p class="card-text">No solo es tiempo de realizar encuentros, participa en comunidades y en cientos de eventos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text">Tan sencilla que aprender a usarla no será un problema.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-world gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Encuentros</h4>
                                    <p class="card-text">¿Típico no? Planificar un encuentro y que llegue la mitad del equipo. Que los jugadores cercanos sepan de tu encuentro... en una de esas?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>¡Vamos! Únete a nosotros!</h5>
                                <p>crea una cuenta y llevemos <strong>juntos</strong> el deporte amateur al siguiente nivel.</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Comparte con tus amigos</h5>
                                <p>y por que no, con deportistas de <strong>todo el país</strong>.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Disfruta tu vida</h5>
                                <p>practicando el deporte que <strong>amas</strong>. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/our-app.png') }}" alt="{{ config('app.name') }}" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section" id="testimonials">
        <div class="container">
            <div class="section-title">
                <small>TESTIMONIOS</small>
                <h3>Por supuesto que nos interesa saber tu opinión</h3>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <img src="images/testimonials/FelipeValdebenito.jpg" alt="client" class="client-img">
                    <blockquote class="blockquote"><em>"Mi nombre es Felipe Valdebenito, soy deportista, ando en skate y bueno, lo que opino de JouerCLUB es que es una muy buena iniciativa porque se entrega información y al mismo tiempo se nota que hay un interés de por medio para que se puedan realizar este tipo de acciones, que ya sean proyectos deportivos, actividades o juntar gente para formar algún tipo de comunidad. Me parece una muy buena iniciativa ya que siempre falta esa información."</em></blockquote>
                    <h5 class="mt-4 mb-2">Felipe Valdebenito</h5>
                    <p class="text-primary">Skater</p>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALERÍA</small>
                <h3>¿Como luce? Pués Genial!</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="{{ asset('images/screenshots/create_meeting.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/login_checked.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/login.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/meeting_detail.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/meetings_404.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/profile.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/select_court.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/select_skills.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/select_teammates.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/sportfield_services.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/team_detail.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/teams_404.png') }}" alt="image">
                <img src="{{ asset('images/screenshots/teams.png') }}" alt="image">
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Preguntas Frecuentes</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">¿Mis datos son recopilados para ser usados en otro ámbito y/o circunstancias?</h4>
                    <p class="light-font mb-5">Ni siquiera lo pienses, solo queremos brindarte la mejor experiencia al generar un encuentro deportivo, tus datos son de exclusivo uso dentro de la plataforma JouerCLUB.</p>
                    <h4 class="mb-3">¿Qué deportes contempla la aplicación?</h4>
                    <p class="light-font mb-5">De momento solo tenemos complejos depotifivos asociados al <strong>FÚTBOL</strong>, quédate atento a las novedades del mundo JouerCLUB!</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">¿Se realizan cargos de servicio?</h4>
                    <p class="light-font mb-5">Hey! si eres <strong>JOUER</strong> no tienes de que preocuparte. Nuestras mayor ganacia es el crecimiento del deporte amateur en nuestro país. <small><sub>*  Ahora bien, si tu inquietud es frente a las ganacias monetarias, nuestro equipo las obtiene mediante el cobro a usuarios <strong>CLUBER</strong>, a quienes brindamos sistemas para la administración de su complejo deportivo.</sub></small></p>
                    <h4 class="mb-3">¿Se descuenta saldo al recibir SMS por parte de JouerCLUB?</h4>
                    <p class="light-font mb-5">Claro que no, aquello corre por nuestra cuenta, no te preocupes!</p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->



    <div class="section bg-gradient" id="download">
        <div class="container">
            <div class="call-to-action">
                <div><img src="{{ asset('images/logos/logo.png') }}" class="img-fluid" alt="{{ config('app.name') }}" width="25%"></div>
                <h2>¡Hey! Genial, haz llegado hasta aquí. ¿Un encuentro? o ¿mejor dos? Más bien, los que tú quieras!</h2>
                <p class="text-white">Ingresa al market PlayStore y descarga la APP, ¿Lo hacemos por tí? ¡Bien! Con un click en la siguiente imagen y basta. </p>
                <div class="my-4">
                    <a href="https://play.google.com/apps/testing/cl.jouer_club.jouer_jouerclub/" class="btn btn-light"><img src="{{ asset('images/logos/playicon.png') }}" alt="icon"> Google play</a>
                </div>
                <p class="text-white"><small><i>*Disponible desde Android 5.0 - Lollipop o posteriores.</i></small></p>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span>Bravo de Saravia 2980, Renca, Región Metropolitana, Chile</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:contacto@jouer-club.cl">contacto@jouer-club.cl</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:+56962245452">+56 962 245 462</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-twitter-alt"></span></a>
                        <a href="#"><span class="ti-instagram"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2"><small>COPYRIGHT © <script>document.write(new Date().getFullYear())</script>. THESIS PROJECT <a href="">CPQM07</a> & <a href="">YERKOS</a></small></p>

        <small>
            <a href="https://cluber.jouer-club.cl" class="m-2">CLUBER</a>
            <a href="#" class="m-2">TÉRMINOS & CONDICIONES</a>
            <a href="#" class="m-2">PRIVACIDAD</a>
        </small>
    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
