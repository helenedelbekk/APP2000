<?php
include ("start_3.php");
 ?>
 <!DOCTYPE html>
<html lang="no">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stilark.css">
    <title>Vestfold Gruppe 12|Logg inn</title>
</head>

<body>
<article class="login-page">
 <section class="form">
<form id="login-form" name="login-form" method="post">
   <label for="epost">Fyll inn epost</label>
  Epost <input type="text" name="epost" type="text" id="epost"> <br />
   <label for="passord">Fyll inn passord</label>
  Passord <input type="password" name="passord" id="passord">  <br/>
   <label for="male">Velg brukertype</label>
  Brukertype
  <select class="brukertype" name="brukertype">
    <option value="1">Bruker</option>
    <option value="2">Admin</option>
    <option value="3">Kontrollor</option>
  </select> <br><br>
  <input type="submit" name="loginbutton" class="loginbutton" value="Logg inn">
  <input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br/>
</form> <br>

<script type="text/javascript" language="JavaScript">
document.forms['login-form'].elements['epost'].focus();
</script>

<?php
  if (isset($_POST ["loginbutton"]))
    {
      include("validering.php");

      $epost=$_POST ["epost"];
      $salt="IT2_2021";
      $passord=$_POST["passord"].$salt;
      $passord=sha1($passord);
      $brukertype=$_POST["brukertype"];

      if (!sjekkEpostPassordBrukertype($epost,$passord,$brukertype))  /* epost og passord er ikke korrekt */
        {
          print("<strong><br>Feil epost/passord/brukertype <br> </strong>");
        }
      else  /* epost og passord er korrekt */
        {
          session_start();
          $_SESSION["epost"]=$epost;  /* epost lagt inn i session-variabelen */
          print("<meta http-equiv='refresh' content='0;url=default.php'>"); /* husk å bytte filnavn til riktig side */
            /* redirigering til hoved-siden */
        }
    }


?>


<br>
Ny bruker? <br>
<a href="registrer_bruker.php">Registrer deg her</a> <br>

 <br>
<a href="glemt-passord.php">Glemt passord?</a> <br> <br>

</section>
</article>
</body>

</html>
