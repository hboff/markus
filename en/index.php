<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>PantheonElite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/favicon.ico" rel="icon">
    <link href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/css/styles.css" rel="stylesheet" />
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

        <!-- MDB CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" />
        <!-- MDB JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/css/style.css" rel="stylesheet">

    <style>
        .service-item .service-text {
            flex-grow: 1;
        }
        .fullscreen {
            height: 100vh;
        }

.float-whatsapp{
	width:60px;
	height:60px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
}
.float-telegram{
	width:60px;
	height:60px;
	background-color:#0088cc;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
}

    </style>
</head>

<body>

<!-- Carousel Start -->
<div class="fullscreen position-relative">
    <img src="img/carousel-2.jpg" alt="Dubai" style="float:left;width:100vw;height:100vh;object-fit:cover;   object-position: top">
    <div class="carousel-caption">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7 text-end">
                    <p class="fs-4 text-white animated slideInLeft"><strong>Pantheon-Elite</strong></p>
                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Der Weg zu Ihrem Erfolg</h1>
                    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                    <a class="btn  rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #0064b2; color: #fff;" href=""
                        onclick="Calendly.initPopupWidget({url: 'https://calendly.com/oskarkelohse/erstbesprechung-immobilie-dubai'});return false;">Jetzt beraten lassen</a>
                    <!-- Calendly link widget end -->
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Carousel End -->

    <!-- Navbar -->
    <?php include '../navbar-en.php';?>


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Ihr Partner in Dubai</h1>
            <p class="fs-5 fw-medium text-primary">Unsere Dienstleistungen</p>

        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-5.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Aufenthaltsgenehmigung / Visum</h4>
                            <p class="mb-0">Wir unterstützen Sie bei der Beantragung des passenden Visums für Dubai, um
                                Ihnen einen reibungslosen und schnellen
                                Visumerhalt zu ermöglichen.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/en/visum.php">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                  <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-6.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Unternehmensgründung</h4>
                            <p class="mb-0">Unser Team hilft Ihnen bei der Gründung Ihrer Firma in Dubai, indem es Sie
                                durch den gesamten Prozess begleitet, von der
                                Auswahl der richtigen Rechtsform bis hin zur Registrierung und Geschäftsplanung.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/en/unternehmensgruendung.php">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-7.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Kontoeröffung</h4>
                            <p class="mb-0">Wir bieten maßgeschneiderte Lösungen für die Eröffnung von Bankkonten in
                                Dubai und begleiten Sie durch den gesamten
                                Prozess, um Ihren individuellen Bedürfnissen gerecht zu werden.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/en/kontoeroeffnung.php">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-8.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Immobilienkauf</h4>
                            <p class="mb-0">Unsere erfahrenen Immobilienexperten unterstützen Sie bei der Suche, Auswahl
                                und dem Kauf der idealen Immobilie in
                                Dubai, die Ihren persönlichen Anforderungen entspricht.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/en/immobilienkauf.php">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-9.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Personalvermittlung</h4>
                            <p class="mb-0">Unser Expertenteam kann Sie bei der Suche, Auswahl und Einstellung von
                                qualifiziertem Personal für Ihr Unternehmen in
                                Dubai unterstützen, um den richtigen Talentpool für Ihr Unternehmen aufzubauen.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/en/recruiting.php">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-10.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Umzugsservice</h4>
                            <p class="mb-0">Wir unterstützen Sie bei der Organisation Ihres Umzugs nach Dubai,
                                einschließlich der Suche nach geeigneter Unterkunft,
                                der Organisation von Transport und Logistik sowie der Anmeldung bei lokalen Behörden und
                                Einrichtungen.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/en/logistik.php">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Kontakt Start -->
    <section class="page-section bg-light">
        <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="stepper d-flex flex-column ml-2">
                        <div class="stepper d-flex flex-column mt-5 ml-2">
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">1</div>
                                    <div class="line h-100"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Schritt 1: Beratungsbedarf ermitteln</h5>
                                    <p class="lead text-muted pb-3">Ermitteln Sie Ihren Bedarf an Beratungsdienstleistungen in Dubai.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">2</div>
                                    <div class="line h-100"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Schritt 2: Unverbindliche Anfrage stellen</h5>
                                    <p class="lead text-muted pb-3">Senden Sie uns eine unverbindliche Anfrage und erhalten Sie alle wichtigen Informationen.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">3</div>
                                    <div class="line h-100"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Schritt 3: Individuelle Strategieentwicklung</h5>
                                    <p class="lead text-muted pb-3">Lassen Sie uns gemeinsam eine individuelle Strategie entwickeln, um Ihre Ziele in Dubai zu erreichen.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">4</div>
                                    <div class="line h-100"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Schritt 4: Finanzierungs- und Investitionsmöglichkeiten</h5>
                                    <p class="lead text-muted pb-3">Lassen Sie sich von uns über Finanzierungs- und Investitionsmöglichkeiten in Dubai informieren.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">5</div>
                                    <div class="line h-100 d-none"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Schritt 5: Passende Lösungen entwickeln</h5>
                                    <p class="lead text-muted pb-3">Nutzen Sie unsere Expertise  um erfolgreich in Dubai zu agieren.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="calendly-inline-widget"
                        data-url="https://calendly.com/oskarkelohse/erstbesprechung-immobilie-dubai?hide_gdpr_banner=1"
                        style="min-width:320px;height:680px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"
                        async></script>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- Kontakt End -->

<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 feature-row">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-1.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Performance</h5>
                    <p class="mb-0">We offer first-class services based on years of experience and industry-specific expertise</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-2.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Professional Team</h5>
                    <p class="mb-0">Our dedicated and experienced team consists of experts from various fields to collectively realize your goals.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-3.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Fair Pricing</h5>
                    <p class="mb-0">We value transparency and offer competitive prices without making compromises.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-4.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Support</h5>
                    <p class="mb-0">Our reliable customer service is available around the clock to answer your questions, so you can focus on the essentials.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->



    <!-- Project Start -->
<section class="page-section bg-light">
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">Some of our completed projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/project-1.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Tech Startups</a>
                        <span>We supported a tech startup in applying for a business visa, setting up a company, and opening an account while facilitating the hiring of professionals for the company.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/project-2.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Luxury Real Estate</a>
                        <span>Our team assisted an international investor in applying for a property investor visa and acquiring a luxury property in Dubai, including financing and account opening.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/project-3.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Family Business</a>
                        <span>Our team supported a family business in applying for family visas, searching for suitable apartments and schools, and recruiting local staff for the move to Dubai.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/project-4.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">E-Commerce Company</a>
                        <span>Our team assisted an e-commerce company in setting up a branch in Dubai, applying for work visas for the team, and successfully opening an account with a local bank.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Project End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Unser Team</p>
                <h1 class="display-5 mb-5">Unsere Experten - Ihre Visionen</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/markus.jpeg" alt="" style="width: 100%; height: 400px; object-fit: cover;">
                        <div class="team-content">
                            <h5>Markus Maier</h5>
                            <p class="text-primary">Founder & CEO</p>
                            <p ><b>Fachgebiet:</b> internationale Bankenbeziehung</p>
                            <p><b>Sprachen:</b> Russisch, Deutsch, Englisch</p>
                            <ul class="team-social">
                                <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/andreas.jpeg" alt="" style="width: 100%; height: 400px; object-fit: cover;">
                        <div class="team-content">                        
                        <h5>Andreas Schlegel</h5>
                        <p class="text-primary">Founder</p>
                        <p><b>Fachgebiet:</b> Immobilien</p>
                        <p><b>Sprachen:</b> Russisch, Deutsch</p>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/dimitri.jpeg" alt="" style="width: 100%; height: 400px; object-fit: cover;">
                        <div class="team-content">                        
                        <h5>Dr. Dmitrij Balliet</h5>
                        <p class="text-primary">Partner</p>
                        <p><b>Fachgebiet:</b> Immobilien</p>
                        <p><b>Sprachen:</b> Russisch, Deutsch, Englisch</p>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul> 
                       </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/mathias.jpeg" alt="" style="width: 100%; height: 400px; object-fit: cover;">
                        <div class="team-content">                        
                        <h5>Mathias Krüger</h5>
                        <p class="text-primary">Partner</p>
                        <p><b>Fachgebiet:</b>Immobilien</p>
                        <p><b>Sprachen:</b>Deutsch, Englisch</p>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

<?php include '../kontakt-incl.php';?>

<?php include '../footer-en.php';?>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/wow/wow.min.js"></script>
    <script src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5X+nU6+5k7+i5Z97PbRSJtiwF888E8/og1puFT+8"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-q7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha384-cek7w7w2ONa/xDpUfTLINKtDE9lF1ro9AvL7l87ZeM6/z99i6g3P6r5Q5f5da6aY"
        crossorigin="anonymous"></script>
    <script>$(function () {
            $('a[href*=#]').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 500, 'linear');
            });
        });</script>
</body>

</html>