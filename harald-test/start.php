<?php
session_start();
@$innloggetBruker=$_SESSION["epost"];

if (!$innloggetBruker)  /* bruker er ikke innlogget */
 {
  print("<meta http-equiv='refresh' content='0;url=login.php'>");
 }
?>
<link rel="stylesheet" href="stilark.css">
  <nav>
    <div class="logo">
        <h4><a href="default.php">Gruppe 12</a></h4>
    </div>

    <?php  if (isset($_SESSION['epost'])) : ?>
            <p style="color: white;">
                Velkommen
                    <?php echo $_SESSION['epost']; ?>
            </p>

        <?php endif ?>

    <ul class="nav-links">
        <li>
            <a href="avstemming.php">Avstemming</a>
        </li>
        <li>
            <a href="nominering.php">Nominering</a>
        </li>
        <li>
            <a href="registrering.php">Registrering</a>
        </li>
        <li>
            <a href="bytt_pw.php">Bytt passord</a>
        </li>
        <li>

            <a href="utlogging.php">Logg ut</a>
        </li>
    </ul>



    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>
<?php
/*
Denne siden er utviklet av Helene Delbekk, sist oppdatert av Helene Delbekk den 07.12.2020.
Kontrollert sist av Harald Evensen den 09.12.2020.
*/
?>