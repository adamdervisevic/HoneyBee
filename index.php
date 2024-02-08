<?php
include "components/head.php";
include "components/header.php";
?>
<main>
    <!-- ovde ide content -->
    <section class="hero">
        <div class="hero-text">
            <h5>Neki text</h5>
            <h4>skolica</h4>
            <h1>HoneyBee</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque animi nihil nulla</p>
            <a href="#">Nesto</a>
            <a href="#" class="ctaa"><i class="ri-play-fill"></i>Watch</a>
        </div>

        <div class="hive header_hive">
            <div class="hexagon header_hexagon hex-s"></div>
            <div class="hexagon header_hexagon hex-m"></div>
            <div class="hexagon header_hexagon hex-b"></div>
        </div>
    </section>

    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
        <a href="#"><i class="ri-facebook-line"></i></a>
    </div>

    <section class="reasons_why reasons_why_disappear">
        <h2>Zasto online nastava</h2>
        <div class="section_why_hive">
            <button>
                <div class="hexagon hex-why">
                    <p>Fleksibilnost</p>
                </div>
            </button>
            <button>
                <div class="hexagon hex-why">
                    <p>Pristupacnost</p>
                </div>
            </button>
            <button>
                <div class="hexagon hex-why">
                    <p>Resursi</p>
                </div>
            </button>
        </div>
        <p class="reason_why"></p>
    </section>

    <section class="our_teachers reasons_why_disappear">
        <h2>Nasi ucitelji</h2>
        <div>
            <div class="content_teachers_holder">
                <img src="assets/img/teacher.jpg" alt="teacher_1">
                <div class="text_teachers_holder">
                    <p>&#9733; Iskustvo: 5 godina</p>
                    <p>&#9733; Broj casova: 2400</p>
                    <p>&#9733; Neki atribut: 1000</p>
                </div>
            </div>
            <div class="content_teachers_holder">
                <img src="assets/img/teacher.jpg" alt="teacher_1">
                <div class="text_teachers_holder">
                    <p>&#9733; Iskustvo: 5 godina</p>
                    <p>&#9733; Broj casova: 2400</p>
                    <p>&#9733; Neki atribut: 1000</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section_testimonials">
        <h2>Utisci</h2>
        <div class="testimonial_carousel">
            <div>
                <video width="100%" height="100%" controls>
                    <source src="assets/img/clip.mp4" type="video/mp4">
                    <source src="assets/img/clip.mkv" type="video/mkv">
                    <source src="assets/img/clip.webm" type="video/webm">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls>
                    <source src="assets/img/clip.webm" type="video/webm">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls>
                    <source src="assets/img/clip.webm" type="video/webm">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls>
                    <source src="assets/img/clip.webm" type="video/webm">
                </video>
            </div>

        </div>

    </section>
</main>
<?php
include "components/footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="assets/js/carousel.js"></script>
<?php
include "components/foot.php";
?>