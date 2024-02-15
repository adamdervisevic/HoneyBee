<?php
$class_target = $_GET['class_type'];
$single_class = ["Individual class", "Individualni časovi engleskog jezika pružaju personalizovan pristup učenju jezika. Svaki čas se fokusira na potrebe i ciljeve samog učenika. Učitelj može prilagoditi tempo i sadržaj u skladu sa nivoom znanja, interesovanjima i stilom učenja pojedinca. Ovi časovi često omogućavaju dublje razumevanje gradiva, intenzivniji rad na veštinama i veću pažnju posvećenu individualnim izazovima u učenju jezika. Učenik ima mogućnost da postavi pitanja i dobije odgovore direktno od nastavnika, što može doprineti bržem napretku u usvajanju jezika.", '10$', 'single_class.webp'];
$dual_class = ["Dual class", "Časovi engleskog jezika u paru pružaju mogućnost učenja jezika u manjoj grupi, obično sa jednim drugim učenikom. Ovi časovi kombinuju individualnu pažnju sa socijalnom interakcijom, što može biti korisno za učenike koji preferiraju grupno okruženje, ali i žele personalizovan pristup učenju. Učenici imaju priliku da vežbaju konverzaciju, rade zajedničke vežbe i pružaju podršku jedni drugima. Ovo takođe može biti ekonomičnija opcija u odnosu na potpuno individualne časove, ali i dalje omogućava prilagođavanje nastavnog procesa potrebama svakog učenika.", '18$', "pair_class.webp"];
$junior_class = ["Junior class", "Časovi engleskog jezika za decu su osmišljeni da budu interaktivni, zabavni i prilagođeni uzrastu i interesovanjima dece. Ovi časovi često koriste igru, pesme, priče i druge kreativne aktivnosti kako bi decu motivisali da uče jezik. Nastavni materijali su obično ilustrovani i prilagođeni dečjem razumevanju. Učitelji često koriste metodologije koje podstiču aktivno učešće dece, kao što su role-playing igre, grupni projekti i aktivnosti koje podstiču komunikaciju. Cilj ovih časova je ne samo naučiti decu osnovama engleskog jezika, već i razviti njihovu ljubav prema učenju jezika i otvoriti vrata ka međukulturalnom razumevanju.", '25$', "junior_class.webp"];
$collect_class_types = [$single_class, $dual_class, $junior_class];

$target;

for ($i = 0; $i < count($collect_class_types); $i++) {
  if ($class_target === $collect_class_types[$i][0]) {
    $target = $collect_class_types[$i];
    break;
  }
}



?>
<?php
include "components/head.php";
include "components/navbar.php";
?>
<main>

  <section class="class_program">
    <div>
      <h1>Program:
        <?php echo $target[0] ?>
      </h1>
      <p>opis:
        <?php echo $target[1] ?>
      </p>
      <p>Cena:
        <?php echo $target[2] ?>
      </p>
      <a href="#contact_id">link</a>
    </div>
    <div>
      <img src="../assets/img/<?php echo $target[3] ?>" alt="<?php echo $target[0] ?>">
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
<script>
  const contact_class_validation = true;
</script>
<?php

include "components/foot.php";
?>