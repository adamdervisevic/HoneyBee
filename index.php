<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <header>
        <a href="#" class="logo">
            <img src="img/logo.webp" alt="website logo">
        </a>

        <ul class="navlist">
            <li><a href="#">Pocetna strana</a></li>
            <li id="menu_trigger">
                <p>Naši programi</p>
                <ul id="menu_program">
                    <li><a class="menu_program_link" href="#">Individualna nastava za odrasle</a></li>
                    <li><a class="menu_program_link" href="#">Ucenje u paru</a></li>
                    <li><a class="menu_program_link" href="#">Grupna nastava za decu</a></li>
                </ul>
            </li>
            <li id="cenovnik"><a href="#">Cenovnik</a></li>
            <li><a href="#">O nama</a></li>
            <li><a href="#">Iskustva polaznika</a></li>
            <li><a href="#">Kontakt</a></li>

        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h5>Neki text</h5>
            <h4>skolica</h4>
            <h1>HoneyBee</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque animi nihil nulla</p>
            <a href="#">Nesto</a>
            <a href="#" class="ctaa"><i class="ri-play-fill"></i>Watch</a>
        </div>

        <!-- <div class="hero-img">
            <img src="img/main.png" alt="">
        </div> -->

        <!-- og hive for v--1 and v--2 -->
        <!-- <div class="hive">
            <div class="hexagon"></div>
            <div class="hexagon hex-2"></div>
            <div class="hexagon hex-3"></div>
            <div class="hexagon hex-4"></div>
            <div class="hexagon hex-5"></div>
            <div class="hexagon hex-6"></div>
            <div class="hexagon hex-7"></div>
        </div> -->

        <div class="hive">
            <div class="hexagon hex-s"></div>
            <div class="hexagon hex-m"></div>
            <div class="hexagon hex-b"></div>
        </div>
    </section>

    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
        <a href="#"><i class="ri-facebook-line"></i></a>
    </div>


    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="js/script.js"></script>
</body>

</html>