<?php
$callan_link = "<a style='color: #faaa1a !important; background-color: transparent; font-size: 2rem; padding: 0' href='callan.php'>Callan</a>";
$class_target = $_GET['class_type'];



$title = "HoneyBee | " . $class_target . " kurs";

$single_class = [
  "individualni",
  "Individualna nastava za odrasle",
  ['Prijatna atmosfera tokom nastave', 'Efikasan i dinamičan način učenja', 'Fokus je na govoru', 'Vi ste aktivni učesnici u konverzaciji', 'Po završenom svakom nivou dobijate sertifikat (ukupno 12 nivoa)'],
  'Individualna nastava se kreira za Vas i po Vašoj meri. Ovaj oblik nastave omogućava da se fokusirate na Vaše lične ciljeve i napredak, bilo da se radi o poslovnom engleskom jeziku ili konverzaciji.',
  'Koristimo proverene metode poput ' . $callan_link . ' metod nastave, gde ste Vi kao polaznik aktivan učesnik u konverzaciji, dok Vam mi kao predavači pojašnjavamo vokabular i nove koncepte i u toku konverzacije ispravljamo napravljene greške. Tu smo da Vam pomognemo da tečno govorite engleski jezik uz intenzivnu konverzaciju.',
  '/assets/img/slika_za_individue.webp',
  [
    [
      'Cenovnik za konverzacijski engleski na mesečnom nivou',
      '2x1 čas nedeljno',
      '9.000 dinara',
      [
        '1 čas traje 60 minuta',
        'Pristup platformi',
        'Jutarnji, popodnevni i večernji termini',
        'Besplatno testiranje',
        'Pristup Callan aplikaciji'
      ]
    ],
    [
      'Cenovnik za poslovni engleski na mesečnom nivou',
      '2x1 čas nedeljno',
      '11.400 dinara',
      [
        '1 čas traje 60 minuta',
        'Pristup platformi',
        'Jutarnji, popodnevni i večernji termini',
        'Besplatno testiranje',
        'Pristup Callan aplikaciji'
      ]
    ]
  ]
];
$dual_class = [
  "grupni",
  "Učenje u paru (Dual fun)",
  ['Prijatna atmosfera tokom nastave', 'Efikasan i dinamičan način učenja', 'Focus je na govoru', 'Vi ste aktivni učesnici u konverzaciji', 'Po završenom svakom nivou dobijate sertifikat ( ukupno 12 nivoa)'],
  'Ukoliko ste osoba koja pored individualnog pristupa voli i socijalnu interakciju , onda je ovaj program idealan za Vas . Ovde ćete imati priliku da učestvujete  u role play aktivnostima gde se simuliraju realne situacije kako iz svakodnevnog života, tako i iz Vašeg poslovnog okruzenja.',
  'Ovaj tip programa je idealan ako biste zajedno učili s nekim iz Vašeg okruzenja , bilo da se radi o Vašem partneru , prijatelju , ili pak rođaku. Samim tim biste postigli i najrealnije simulacije iz svakodnevnog života.',
  '/assets/img/slika_za_duo.webp',
  [
    [
      'Cenovnik za učenje u paru (Dual fun) na mesečnom nivou po osobi',
      '2x1 čas nedeljno',
      '4.200 dinara',
      [
        '1 čas traje 60 minuta',
        'Pristup platformi',
        'Jutarnji, popodnevni i večernji termini',
        'Besplatno testiranje',
        'Pristup Callan aplikaciji'
      ]
    ]
  ]
];
$junior_class = [
  'Junior',
  "Grupna nastava za decu uzrasta 6-14 godina",
  [
    'Prijatna i zabavna atmosfera tokom nastave',
    'Efikasan i dinamičan način učenja',
    'Fokus je na govoru',
    'Vaše dete aktivno učestvuje u konverzaciji',
    'Po završenom svakom nivou Vaše dete dobija diplomu'
  ],
  'Kroz ovaj program smo tu da Vašem detetu pruzimo ono najbolje. Kako sam i sama roditelj, razumem Vaše zelje I očekivanja koja imate kada je reč o napretku vašeg deteta. Zato sam kreirala poseban način učenja gde se pre svega fokusiramo na razvijanje konverzacije , učeći o mnogim korisnim stvarima i sve to kroz igru, koristeći pesme , price i druge kreativne aktivnosti u zavisnosti od uzrasta deteta.',
  'Koristimo razlicite metode za aktivno učešće dece, kao što je ' . $callan_link . ' metod za decu i role play aktivnosti , koje podsticu komunikaciju i brzo usvajanje i primenjivanje vokabulara. Ono što je vazno reći jeste da pored svih ovih aktivnosti , s velikom paznjom pristupamo svakom detetu i pratimo njegov napredak.',
  '/assets/img/slika_za_decu.webp',
  [
    [
      'Cenovnik za grupnu nastavu za decu na mesečnom nivou ',
      '3x1 čas nedeljno',
      '3.000 dinara',
      [
        '1 čas traje 75 minuta',
        'U grupi je najviše 4 deteta',
        'Jutarnji, popodnevni i večernji termini',
        'Besplatno testiranje'
      ]
    ],
    [
      'Cenovnik za grupnu nastavu za decu na mesečnom nivou ',
      '2x1 čas nedeljno',
      '2.700 dinara',
      [
        '1 čas traje 75 minuta',
        'U grupi je najviše 4 deteta',
        'jutarnji, popodnevni i večernji termini',
        'besplatno testiranje'
      ]
    ]
  ]
];
$collect_class_types = [$single_class, $dual_class, $junior_class];

$target = null;

for ($i = 0; $i < count($collect_class_types); $i++) {
  if ($class_target === $collect_class_types[$i][0]) {
    $target = $collect_class_types[$i];
    break;
  } else if ($i + 1 == count($collect_class_types) && !$target) {
    Header("Location: index.php");
  }
}



?>
<?php
include "components/head.php";
?>
<link rel="stylesheet" href="assets\styles\style_class.css" />
<?php
include "components/navbar.php";
?>
<main>

  <section class="class_program" style="background-image: url(..<?php echo $target[5] ?>)">
    <div>
      <h1>
        <?php echo $target[1] ?>
      </h1>
      <ul>
        <?php
        for ($i = 0; $i < count($target[2]); $i++) {
          ?>
          <li>&#9733;
            <?php
            echo $target[2][$i];
            ?>
          </li>
          <?php
        }
        ?>
      </ul>
      <p>
        <?php echo $target[3] ?>
      </p>
      <p>
        <?php echo $target[4] ?>
      </p>
      <p>
        Očekujemo Vas s velikom radošću!!!
      </p>
      <a href="#contact_id">Prijava</a>
    </div>

    <!-- <img class="class_img" src="..<?php echo $target[5] ?>" alt="<?php echo $target[0] ?>"> -->

  </section>

  <section class="cenovnik">
    <?php
    for ($i = 0; $i < count($target[6]); $i++) {
      ?>
      <div>
        <h2>
          <?php
          echo $target[6][$i][0];
          ?>
        </h2>
        <p>
          <?php
          echo $target[6][$i][1];
          ?>
        </p>
        <p>
          <?php
          echo $target[6][$i][2];
          ?>
        </p>
        <ul>
          <?php
          for ($y = 0; $y < count($target[6][$i][3]); $y++) {
            ?>
            <li>&#9733;
              <?php
              echo $target[6][$i][3][$y];
              ?>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
      <?php
    }
    ?>
  </section>


  <?php
  include "components/contact.php";
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