<nav>
    <a href="index.php" class="logo">
        <img src="../assets/img/logo.webp" alt="website logo">
    </a>

    <ul class="navlist">
        <li><a href="index.php">Pocetna strana</a></li>
        <li id="menu_trigger">
            <p>Naši programi</p>
            <ul id="menu_program">
                <li><a class="menu_program_link"
                        href="class.php?class_type=<?php echo 'Individual class'; ?>">Individualna nastava za
                        odrasle</a></li>
                <li><a class="menu_program_link" href="class.php?class_type=<?php echo 'Dual class'; ?>">Ucenje u
                        paru</a></li>
                <li><a class="menu_program_link" href="class.php?class_type=<?php echo 'Junior class'; ?>">Grupna
                        nastava za decu</a></li>
            </ul>
        </li>
        <li id="about"><a href="about.php">O nama</a></li>
        <li><a href="#testimonials_id">Iskustva polaznika</a></li>
        <li><a href="#contact_id">Kontakt</a></li>

    </ul>

    <div class="bx bx-menu" id="menu-icon"></div>
</nav>