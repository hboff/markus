    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" style=" backdrop-filter: blur(25px) invert(.2);  background-color: rgba(255, 255, 255, .15);">
        <div class="container">
            <a class="navbar-brand" href="https://pantheon-elite.ae/ru/index.php"><span style="color: #5e9693;">Pantheon</span><span
                    style="color: #fff;">Elite</span></a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/ru/dienstleistungen.php">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ru/team.php">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ru/contact.php">Контакт</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="https://api.whatsapp.com/send/?phone=971561642909&text&type=phone_number&app_absent=0">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="https://t.me/Baucampus_bot">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/en/index.php">
                            &#127468;&#127463; 
                        </a>
                    </li><li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'];?>/">
                            &#x1F1E9&#x1F1EA;
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
    var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

    window.onload = function() {
        if(iOS){
            document.querySelector('.navbar').style.backgroundColor = 'rgba(255, 255, 255, 1)'; // Zum Beispiel, grün für iOS
        }
        else{
            document.querySelector('.navbar').style.backgroundColor = 'rgba(255, 255, 255, .15)'; // Ihre aktuelle Farbe
        }
    }
</script>
<!-- Navbar -->