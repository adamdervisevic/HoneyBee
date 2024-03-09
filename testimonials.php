<?php
$title = "HoneyBee - Iskustva polaznika";
include "components/head.php";
?>
<link rel="stylesheet" href="assets\styles\style_testimonials.css" />
<?php
include "components/navbar.php";

$student_1 = [
  'b_k.webp',
  'Bojana Kostadinovic, komercijalista',
  'Predavači su izuzetno ljubazni, pristupacni, puni razumevanja i posvećeni svakom detetu bez obzira što su grupice u pitanju. Njihova strpljivost, znanje i metode ključ su uspeha moje dece.',
  [
    'Sin je krenuo pre dve godine sa pohadjanjem nastave. Sa inovativnim metodama vrlo brzo se video napredak, a da on toga nije bio ni svestan. Svakim casom koji je jedva čekao, sta ce to novo biti, koja igra ili učenje o nečemu, on je sve bolje savladavao jezik i u školi napredovao. Za pola godine prijavljen je na prvo takmičenje u školi. Ove godine je krenula i ćerka koja ima minimalno predznanje, a već se vidi veliki napredak.',
    'Ja sam vise nego zadovoljna prvo jer je online, ne moram da razmišljam koliko je udaljeno, da li će stići, posao, obaveze, drugo usaglašeno je sa skolom i ostalim propratnim obavezama. Takodje se uči paralelno sa skolom, nije kao neke škole što se drže isključivo njihove rutine i cilja. Ovde se uči tako da ostane upamćeno, a ne samo za trenutnu ocenu ili dobijenu diplomu.',
    'Imali smo i periode kasnjenja, zaboravljanja na čas, ali uvek sa ljubaznošću i maksimalnim razumevanjem dogovorili sledeći čas.',
    'Predavači su izuzetno ljubazni, pristupacni, puni razumevanja i posvećeni svakom detetu bez obzira što su grupice u pitanju. Njihova strpljivost, znanje i metode ključ su uspeha moje dece.',
    'Svakom bih preporucila bez imalo oklevanja da upiše ovu školu I vide razliku.',
    'Verujte uspeh je zagarantovan!'
  ],
  "type_one"
];

$student_2 = [
  'g_c.webp',
  'Gaga Cvetkovic, vaspitac',
  'Maja je majstor učenja na način koji je i obrazovan i zabavan. Njena sposobnost da prenese složene koncepte kroz jednostavne i humorističke primere čini časove uvek zanimljivim.',
  [
    'Prijateljstvo i učenje" - to su dve ključne reči koje bih upotrebila opisujući svoje iskustvo u školi engleskog jezika "HONEY BEE". Kroz protekle dve godine, Maja nije bila samo moja nastavnica već i dragoceni prijatelj na mom jezičkom putovanju.',
    'Moj put od prvih  koraka u govoru do sadašnjeg samopouzdanja u konverzaciji na engleskom jeziku ne bi bio isti bez Majinog podržavajućeg pristupa. Ona je podsticala moj lični razvoj kroz niz kreativnih aktivnosti koje su ne samo izazivale već su i stvarale prijatnu atmosferu u učenju.',
    'Ono što čini "HONEY BEE" posebnim je to što Maja nije samo profesorka već i prijateljica. Njena spremnost da sasluša moje izazove, kako sa jezikom tako i sa životom, stvarno je dodala dodatnu vrednost mom iskustvu u školi.',
    'Ako tražite ne samo mesto za učenje engleskog, već i zajednicu gde se osećate podržano i gde nastava postaje lična avantura, onda je "Honey Bee" pravi izbor.'
  ],
  'type_one'
];

$student_3 = [
  'i_j.webp',
  'Ivan Jovic, inspektor',
  'Od srca preporučujem školu engleskog jezika HoneyBee, jer je moj engleski postao značajno bolji i dostigao zavidan konverzacijski nivo.',
  [
    'Pri tom su termini časova bili usklađeni sa mojim obavezama, a predavač Maja je na izuzetno zanimljiv interaktivan način predstavila lekcije i omogućila da uspešno i lako napredujem.'
  ],
  'type_one'
];

$student_4 = [
  'd_m.webp',
  'Dragana Miljkovic, umetnik',
  'Pohađanje škole engleskog jezika "HoneyBee” predstavlja jedno od najosvežavajućih iskustava u mom ličnom razvoju. Ova škola nije samo mesto gde se uči jezik; ona je zajednica koja podstiče rast, samopouzdanje i ljubav prema engleskom jeziku.',
  ['
  Jedna od ključnih karakteristika koja izdvaja "HoneyBee" je struktura nastave. Nastavnici su uspeli da spoje tradicionalne i inovativne metode učenja. Raznovrsnost časova, uključujući gramatičke vežbe, konverzaciju i kreativne projekte, čini svaki čas dinamičnim i zanimljivim.
  ',
    'Jedna od ključnih karakteristika koja izdvaja "HoneyBee" je struktura nastave. Nastavnici su uspeli da spoje tradicionalne i inovativne metode učenja. Raznovrsnost časova, uključujući gramatičke vežbe, konverzaciju i kreativne projekte, čini svaki čas dinamičnim i zanimljivim.',
    'Atmosfera na nastavi je zaista inspirativna. Nastavnici su posvećeni podršci učenicima i zbog toga se osećam slobodno da postavljam pitanja, da izražavam svoje ideje i aktivno učestvovjem u diskusijama.',
    'Ono što ovu školu čini posebnom je zajednica učenika. Kroz grupne projekte, konverzacije i radionice, stvoren je prijateljski ambijent koji podržava saradnju i razmenu ideja.',
    'I zato toplo preporučujem Školu engleskog jezika "HoneyBee”jer ovo nije samo obrazovna institucija,to je mesto gde će te doživeti oplemenjujuće iskustvo učenja, mesto gde se rađa ljubav prema jeziku, podstiče samorazvoj i formiraju dugotrajne veze.'
  ],
  'type_one'
];

$student_5 = [
  'o_j.webp',
  'Obrenija Jasnic, medicinski radnik',
  'Nasa teacher Maja je najdivnija osoba.
  Svoj posao radi profesionalno sa puno ljubavi i paznje prema deci.
  Mateja obozava vreme provedeno sa njom.
  ',
  ['Sve pohvale i preporuke sa nase strane.'],
  'type_one'
];

$student_6 = [
  't_m.webp',
  'Teodora Markovic, medicinski radnik',
  'Sve pohvale i preporuke sa nase strane.',
  ['
  Jedva čekam sledeci čas da nastavimo da radimo! Hvala ti 
  '
  ],
  'type_zero'
];

$student_7 = [
  'i_l.webp',
  'Ivana Lalic',
  'Zelim izraziti svoje zadovoljstvo postignutim napretkom u konverzaciji i poslovnom engleskom jeziku. Iskreno, ova škola je prevazišla moja očekivanja.',
  ['Istakla bih izvanrednu stručnost i posvećenost predavača.', 'Mnogo sam samouverenija u komunikaciji na engleskom jeziku, kako u svakodnevnim situacijama, tako i u poslovnom okruženju. Preporučujem ovu školu svima koji žele brz i efikasan napredak u engleskom jeziku.'],
  'type_one'
];

$student_8 = [
  'j_m.webp',
  'Jelena Markovic',
  'Kao mlada osoba koja se pripremala za selidbu u drzavu engleskg govornog područja i želela lakše naći posao, odlučila sam se obratiti timu  HoneyBee za online učenje engleskog jezika. I mogu s ponosom reći da je to bila najbolja odluka koju sam mogla doneti.',
  [
    'Već pri prvom kontaktu s timom, osetila sam toplinu i ljubaznost njihovog pristupa. Bili su neverovatno fleksibilni i prilagodljivi mojim potrebama i rasporedu, što je za mene koja sam tada je i dalje radila puno radno vreme, bilo od ključne važnosti.',
    'Ono što me najviše oduševilo jeste što učenje nije bilo samo linearno, već su se stvarno potrudili preneti znanje na način koji mi omogućava da ga primenim u svakodnevnom životu. Nisu samo radili na gramatici i vokabularu, već su me podsticali da koristim jezik u realnim situacijama, što mi je izuzetno koristilo u samopouzdanju.',
    'Najveća snaga  HoneyBee tima leži u njihovim predavačima. Ti ljudi su pravi dragulji. Topli, ljubazni i predani, uvek su davali svoj maksimum kako bi me opustili i osigurali da savladam potrebno gradivo. Nikada nisam osetila pritisak ili stres tokom časova, što je bilo osvežavajuće iskustvo u svetu učenja jezika.',
    'Sada, zahvaljujući njihovom naporu i podršci, osećam se spremno i samouvereno započeti novu fazu života. Toplo preporučujem skolu jezika HoneyBee svima koji se bore s opuštanjem tokom učenja novog jezika. Ovde ćete naći ne samo sjajne predavače, već i pravu podršku i motivaciju da postignete svoje ciljeve.'
  ],
  'type_two'
];

$student_9 = [
  'u_s.webp',
  'Uros Stojkovic, komercijalista',
  'Škola "HoneyBee" me je dovela do toga da zavolim engleski jezik, ne samo da radim od časa do časa već i da krenem svakodnevno da razmisljam na engleskom jeziku.',
  [
    'Zahvaljujući divnim profesorima, njihovim pristupom i posvećenosti došli smo do onog nivoa o kom sam maštao, i ne..tu nije kraj!'
  ],
  'type_one'
];

$student_10 = [
  'd_i.webp',
  'Danica Ilic, pravnik',
  'Šta reći,osim puno pohvala za ovaj izvanredan tim mladih ljudi koji vole rad sa decom ali i sa odraslima. Puno ozbiljnog rada protkanog zabavom za svačiji ukus i za svaki uzrast...to mogu da potvrdim iskustvom svog deteta koje od kada uči sa ovim izvsrnim predavačima ne samo da ostvaruje odlične rezultate iz engleskog jezika u školi,već i uživa u tome što rade i željno iščekuje svaki naredni čas...',
  ['Takodje,moja prijateljica koja je učila sa njima ima samo reči hvale...Puno strpljenja,taktičnost ,maštovitost i  kreativnost je ono što pružaju svojim učenicima a online pristup bilo kada i bilo gde je još jedna prednost ovakvog učenja .Sve pohvale i sve preporuke,najbolji ste 🥰'],
  'type_three'
];

$student_11 = [
  'h_i.webp',
  'Hristina Gigic, preduzetnica',
  'Odusevljeni smo napretkom nase cerke. Za jako kratko vreme, njeno vladanje engleskim jezikom je znatno poraslo zahvaljujuci efikasnim metodama nastave.',
  ['Majina posvecenost ucenicima podstice kako akademske vestine, tako i mentalni sklop njenih ucenika. Visoko preporucujemo za izvanredno obrazovanje iz engleskog jezika'],
  'type_one'
];

$student_12 = [
  'm_s.webp',
  'Miloš Stojanović , gradjevinski inženjer',
  'Nakon više pokušaja da naučim engleski jezik u raznim školama i sa raznim profesorima konačno sam u školi HONEYBEE uz pomoć Callan metode, posvećenosti i znanja profesorke Maje uspeo da efikasno i brzo naučim engleski jezik.',
  [
    'Uz efikasne, zabavne i relaksirajuće časove u školi HONEYBEE možete lako i brzo da naučite engleski jezik i uštedite vreme i novac.',
    'Svaka preporuka ,kako polaznicima tako i onima kojima je potrebno usavršavanje engleskog jezika.'
  ],
  'type_one'
];



$students = [$student_1, $student_2, $student_3, $student_4, $student_5, $student_6, $student_7, $student_8, $student_9, $student_10, $student_11, $student_12];


?>

<main>
  <section class="testimonials">
    <h1 style="text-align: center;  margin-bottom: 10rem; color: white; font-size: 4.6rem">Šta naši polaznici misle o
      nama</h1>

    <?php for ($i = 0; $i < count($students); $i++) { ?>
      <div class="testimonial_container <?php echo $students[$i][4] ?>">
        <div class="upper_part">

          <div class="up_upper">
            <img src="assets/img/<?php echo $students[$i][0] ?>" alt="<?php echo $students[$i][1] ?>">
          </div>

          <div class="up_lower">
            <p>
              <?php echo $students[$i][1] ?>
            </p>
            <div>
              <img class="bee_logo" src="assets/img/logo.png" alt="">
              <button class="expand">+</button>
            </div>
          </div>

        </div>


        <div class="lower_part">
          <p class="main_text">
            <?php echo $students[$i][2] ?>
          </p>
        </div>
        <div class="filler_text">
          <?php
          for ($y = 0; $y < count($students[$i][3]); $y++) {
            ?>
            <p>
              <?php echo $students[$i][3][$y]; ?>
            </p>
            <?php
          }
          ?>
        </div>
      </div>

    <?php } ?>


  </section>
  <video autoplay muted loop preload class="video">
    <source src="assets/video_imgs/from_class.mp4" type="video/mp4">
  </video>

  <script>
    const testimonial_container = document.querySelectorAll(".testimonial_container");
    const expand_btn = document.querySelectorAll('.expand');
    const lower_part = document.querySelectorAll(".lower_part");
    const filler_text = document.querySelectorAll(".filler_text");
    const main_text = document.querySelectorAll('.main_text');

    // DA BI IMAO PREDODREDJENU VISINU, NA POSEBNOJ STRANICI ISTANACJ OVE UTISKE UZMI IM VISINU KONTEJNERA I ONDA DINAMICKI POSTAVLJAJ OVDE!

    expand_btn.forEach((btn, id) => btn.addEventListener('click', function () {
      if (!filler_text[id].classList.contains('filler_in') && (testimonial_container[id].clientHeight >= 127 || $testimonial_container[id].clientHeight <= 208)) {
        btn.innerHTML = "-";
        filler_text[id].classList.add("filler_in");
        testimonial_container[id].classList.add('default_height');

      } else {
        btn.innerHTML = "+";
        filler_text[id].classList.remove("filler_in");
        testimonial_container[id].classList.remove('default_height');
      }
    }))

  </script>
  <?php
  include "components/contact.php";
  include "components/calendly.php";
  ?>
</main>
<?php
include "components/footer.php";
?>
<script>
  const contact_class_validation = true;
</script>
<?php

include "components/foot.php";
?>