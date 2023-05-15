<?php include 'header.php';?>
<style>
        .service-item .service-text {
            flex-grow: 1;
        }
        .fullscreen {
            height: 100vh;
        }
        </style>
<body>
    <?php include 'navbar.php';?>

    <!-- Carousel Start -->
    <div class="fullscreen position-relative">
        <img src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/kontoeroeffnung.jpg" alt="Dubai"
            style="float:left;width:100vw;height:70vh;object-fit:cover;   object-position: center">
    </div>
    <!-- Carousel End -->

    <!-- Team Start -->
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
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-5.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Разрешение на проживание / Виза</h4>
                            <p class="mb-0">Мы поможем вам подать заявление на подходящую визу в Дубае, чтобы обеспечить быстрое и беспроблемное получение визы.</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>//visum.php">Подробнее<i
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
                            <img class="fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-7.png" alt="Icon">
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
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-8.png" alt="Icon">
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
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-9.png" alt="Icon">
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
                            <img class="img-fluid" src="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/img/icon/icon-10.png" alt="Icon">
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
    <!-- Team End -->


    <?php include 'kontakt-incl.php';?>

    <?php include 'footer.php';?>


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
</body>

</html>