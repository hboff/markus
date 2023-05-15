<!DOCTYPE html>
<html lang="en">

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
    <?php include '../navbar.php';?>


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Ваш партнер в Дубае</h1>
            <p class="fs-5 fw-medium text-primary">Наши услуги</p>

        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Разрешение на проживание / Виза</h4>
                            <p class="mb-0">Мы поможем вам подать заявление на подходящую визу в Дубае, чтобы обеспечить быстрое и беспроблемное получение визы.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="/visum.php">Подробнее<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                  <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Основание компании</h4>
                            <p class="mb-0">Наша команда поможет вам создать вашу компанию в Дубае, сопровождая вас на всем пути от выбора правильной формы собственности до регистрации и планирования бизнеса.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="/unternehmensgruendung.php">Подробнее<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="fluid" src="img/icon/icon-7.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Открытие счета</h5>
                            <p class="mb-0">Мы предлагаем индивидуальные решения для открытия банковских счетов в Дубае и сопровождаем вас на всем пути, чтобы удовлетворить ваши индивидуальные потребности.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="/kontoeroeffnung.php">Подробнее<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-8.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Покупка недвижимости</h5>
                            <p class="mb-0">Наши опытные специалисты по недвижимости помогут вам в поиске, выборе и покупке идеальной недвижимости в Дубае, которая соответствует вашим личным требованиям.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="/immobilienkauf.php">Подробнее<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-9.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Подбор персонала</h5>
                            <p class="mb-0">Наша команда экспертов может помочь вам в поиске, выборе и найме квалифицированного персонала для вашей компании в Дубае, чтобы создать правильный резерв талантов для вашей компании.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="/recruiting.php">Подробнее<i                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100 d-flex flex-column">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-10.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Услуги по переезду</h5>
                            <p class="mb-0">Мы поможем вам организовать ваш переезд в Дубай, включая поиск подходящего жилья, организацию транспорта и логистики, а также регистрацию в местных органах власти и учреждениях.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="/logistik.php">Подробнее<i
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
                                    <h5 class="text-dark">Шаг 1: Определить потребность в консультациях</h5>
                                    <p class="lead text-muted pb-3">Определите вашу потребность в консультационных услугах в Дубае.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">2</div>
                                    <div class="line h-100"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Шаг 2: Отправить необязательный запрос</h5>
                                    <p class="lead text-muted pb-3">Отправьте нам необязательный запрос и получите всю необходимую информацию.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">3</div>
                                    <div class="line h-100"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Шаг 3: Разработка индивидуальной стратегии</h5>
                                    <p class="lead text-muted pb-3">Давайте вместе разработаем индивидуальную стратегию для достижения ваших целей в Дубае.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">4</div>
                                    <div class="line h-100"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Шаг 4: Финансирование и инвестиционные возможности</h5>
                                    <p class="lead text-muted pb-3">Позвольте нам рассказать вам о возможностях финансирования и инвестиций в Дубае.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-1">
                                <div class="d-flex flex-column pr-4 align-items-center">
                                    <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1 me-2">5</div>
                                    <div class="line h-100 d-none"></div>
                                </div>
                                <div>
                                    <h5 class="text-dark">Шаг 5: Разработка подходящих решений</h5>
                                    <p class="lead text-muted pb-3">Используйте наш опыт, чтобы успешно действовать в Дубае.</p>
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
                        <img class="img-fluid" src="img/icon/icon-1.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Услуги</h5>
                    <p class="mb-0">Мы предлагаем услуги высшего класса, основанные на многолетнем опыте и отраслевых знаниях</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Профессиональная команда</h5>
                    <p class="mb-0">Наша преданная и опытная команда состоит из экспертов различных областей, чтобы вместе реализовать ваши цели.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Справедливые цены</h5>
                    <p class="mb-0">Мы ценим прозрачность и предлагаем конкурентоспособные цены без компромиссов.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Поддержка</h5>
                    <p class="mb-0">Наш надежный служба поддержки работает круглосуточно, чтобы ответить на ваши вопросы, чтобы вы могли сосредоточиться на главном.</p>
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
                <p class="fs-5 fw-medium text-primary">Наши проекты</p>
                <h1 class="display-5 mb-5">Некоторые из наших завершенных проектов</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Технологические стартапы</a>
                        <span>Мы помогли технологическому стартапу в подаче заявки на бизнес-визу, регистрации компании и открытии счета, а также облегчили найм специалистов для компании.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Люксовая недвижимость</a>
                        <span>Наша команда помогла международному инвестору в получении визы инвестора в недвижимость и приобретении роскошной недвижимости в Дубае, включая финансирование и открытие счета.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Семейный бизнес</a>
                        <span>Наша команда помогла семейному бизнесу в получении семейных виз, поиске подходящих квартир и школ, а также найме местного персонала для переезда в Дубай.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-4.jpg" alt="">
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Электронная коммерция</a>
                        <span>Наша команда помогла компании в области электронной коммерции в открытии филиала в Дубае, подаче заявок на рабочие визы для команды и успешном открытии счета в местном банке.</span>
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
                        <img class="img-fluid mb-4" src="img/markus.jpeg" alt="">
                        <h5>Markus Maier</h5>
                        <span class="text-primary">Founder & CEO</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/andreas.jpeg" alt="">
                        <h5>Andreas Schlegel</h5>
                        <span class="text-primary">Founder</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/dimitri.jpeg" alt="">
                        <h5>Dr. Dimitri llet</h5>
                        <span class="text-primary">Fachanwalt für Steuerrecht</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/oskar.jpg" alt="">
                        <h5>Oskar Lohse</h5>
                        <span class="text-primary">CTO</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

<?php include '../kontakt-incl.php';?>

<?php include '../footer.php';?>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

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