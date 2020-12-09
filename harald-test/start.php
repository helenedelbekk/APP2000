<?php
session_start();
@$innloggetBruker=$_SESSION["epost"];

if (!$innloggetBruker)  /* bruker er ikke innlogget */
 {
  print("<meta http-equiv='refresh' content='0;url=login.php'>");
 }
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="style.css">
<header class="jalla-nav">
    <div class="logo"><a href="default.php">Valgapplikasjon</a></div>
    <?php  if (isset($_SESSION['epost'])) : ?>
            <p style="color: white;">
                Velkommen
                    <?php echo $_SESSION['epost']; ?>
            </p>

        <?php endif ?>
    <button
           id="nav-main-toggle"
           class="nav-toggle">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
          <span>Meny</span>
        </button>
    
    <div class="nav-burger">
      <nav id="hoved-nav" class="hoved-nav">
            <ul>
              <li><a href="avstemming.php">Avstemming</a></li>
              <li><a href="nominering.php">Nominering</a></li>
              <li><a href="registrering.php">Registrering</a></li>
              <li><a href="utlogging.php">Logg ut</a></li>
            </ul>
          </nav>
        </div>
    </header>  
