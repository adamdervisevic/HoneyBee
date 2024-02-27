<?php
$title = "HoneyBee - Home Page";

include "components/head.php";
include "components/header.php";
?>
<main>
    <!-- ovde ide content -->
    <section class="hero">
        <div class="hero-text">
            <p>Dobodosli u</p>
            <h1>HoneyBee</h1>
            <p>Tim gde cemo zajedno ostvariti Vase ciljeve!</p>
            <p>Uz kreativnost i nasu podrsku steknite samopouzdanje da tečno govorite i razumete engleski jezik.</p>
            <p>Već danas se prijavite za jedan od najboljih programa, i ne zaboravite, “Uvek je pravi trenutak za
                napredak!”</p>
            <a href="#calendly_link">Prijavite se</a>
        </div>

        <div class="hive header_hive">
            <div class="hexagon header_hexagon hex-s"></div>
            <div class="hexagon header_hexagon hex-m"></div>
            <div class="hexagon header_hexagon hex-b"></div>
        </div>
    </section>

    <div class="icons">
        <a href="#" aria-label="instagram"><i class="ri-instagram-line"></i></a>
        <a href="#" aria-label="youtube"><i class="ri-youtube-line"></i></a>
        <a href="#" aria-label="facebook"><i class="ri-facebook-line"></i></a>
    </div>

    <section class="offer reasons_why_disappear">
        <div class="offer_1">
            <img src="assets/img/2.webp" alt="offer(ponuda)">
        </div>
        <div class="offer_2">
            <h2>Sta nudimo?</h2>
            <p class="offer_dynamic"></p>
        </div>
    </section>

    <section class="reasons_why reasons_why_disappear">
        <h2>Zasto online nastava?</h2>
        <div class="section_why_hive">
            <button class="btn_why">
                <div class="hexagon hex-why">
                    <p style="color: #faaa1a;">Fleksibilnost</p>
                </div>
            </button>
            <button class="btn_why">
                <div class="hexagon hex-why">
                    <p>Pristupacnost</p>
                </div>
            </button>
            <button class="btn_why">
                <div class="hexagon hex-why">
                    <p>Resursi</p>
                </div>
            </button>
        </div>
        <p class="reason_why">
            "Online časovi nude fleksibilnost u rasporedu, omogućavajući studentima da usklade svoje studije sa drugim
            obavezama kao što su posao ili porodične obaveze. Ova fleksibilnost omogućava učenicima da kreiraju
            personalizovane rutine učenja koje odgovaraju njihovim individualnim potrebama.";
        </p>
    </section>

    <section class="our_teachers reasons_why_disappear">
        <h2>Nasi ucitelji</h2>
        <div>
            <div class="content_teachers_holder">

                <img src="assets/img/teacher.webp" alt="teacher_1">
                <div class="text_teachers_holder">
                    <p>Ucitelj: Bee</p>
                    <p>&#9733; Iskustvo: 5 godina</p>
                    <p>&#9733; Broj casova: 2400</p>
                    <p>&#9733; Neki atribut: 1000</p>
                </div>
            </div>
            <div class="content_teachers_holder">
                <img src="assets/img/teacher.webp" alt="teacher_2">
                <div class="text_teachers_holder">
                    <p>Ucitelj: Bee</p>
                    <p>&#9733; Iskustvo: 5 godina</p>
                    <p>&#9733; Broj casova: 2400</p>
                    <p>&#9733; Neki atribut: 1000</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section_testimonials reasons_why_disappear">
        <h2 id="testimonials_id">Pogled u učionicu</h2>
        <div class="testimonial_carousel">
            <div>
                <video width="100%" height="100%" controls poster="assets/img/logo.png">
                    <source src="assets/img/Jana.mp4" type="video/mp4">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls poster="assets/img/logo.png">
                    <source src="assets/img/try 2 d.mp4" type="video/mp4">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls poster="assets/img/logo.png">
                    <source src="assets/img/try 3 f.mp4" type="video/mp4">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls poster="assets/img/logo.png">
                    <source src="assets/img/try_1_b_1.mp4" type="video/mp4">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls poster="assets/img/logo.png">
                    <source src="assets/img/try_1_b_2.mp4" type="video/mp4">
                </video>
            </div>
            <div>
                <video width="100%" height="100%" controls poster="assets/img/logo.png">
                    <source src="assets/img/try_2.mp4" type="video/mp4">
                </video>
            </div>
        </div>

    </section>

    <?php
    include "components/contact.php";
    include "components/calendly.php";
    ?>
</main>
<?php
include "components/footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="assets/js/carousel.js"></script>
<script>
    const contact_class_validation = false;
</script>
<?php
include "components/foot.php";
?>
<script>
    reasons_why_btn.forEach((btn, index) => {
        // btn.onclick = () => {
        //   handle_reason_why(index);
        // };
        btn.onclick = () => {
            handle_reason_why(index);
        };
    });

    function handle_reason_why(index) {
        if (!reason_why.classList.contains("reason_why_disappear")) {
            reason_why.classList.add("reason_why_disappear");
        }

        setTimeout(() => {
            document
                .querySelectorAll(`.hex-why > p`)
                .forEach((target, target_index) => {
                    target.style.color = target_index === index ? "#faaa1a" : "white";
                });

            if (index === 0) {
                reason_why.innerHTML =
                    "Online časovi nude fleksibilnost u rasporedu, omogućavajući studentima da usklade svoje studije sa drugim obavezama kao što su posao ili porodične obaveze. Ova fleksibilnost omogućava učenicima da kreiraju personalizovane rutine učenja koje odgovaraju njihovim individualnim potrebama.";
            } else if (index === 1) {
                reason_why.innerHTML =
                    "Pristupačnost:</strong> Online časovi eliminišu geografske barijere, omogućavajući studentima iz različitih pozadina i lokacija pristup kvalitetnom obrazovanju. Bez obzira da li se nalaze u ruralnim područjima ili u prometnim urbanim centrima, pojedinci mogu da se bave obrazovnim prilikama bez ograničenja fizičke udaljenosti.";
            } else {
                reason_why.innerHTML =
                    "Online časovi pružaju pristup raznovrsnim resursima, uključujući multimedijalne materijale, interaktivne simulacije i virtualne laboratorije. Ova raznovrsnost unapređuje iskustvo učenja nudeći više puteva za istraživanje i razumevanje, prilagođavajući se različitim stilovima učenja.";
            }
            reason_why.classList.remove("reason_why_disappear");
        }, 400);
    }

</script>