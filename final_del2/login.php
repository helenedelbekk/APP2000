<?php
include("start_3.php");
 ?>
<article class="login-page">
 <section class="form">
<form id="login-form" name="login-form" method="post">
  Epost <input type="text" name="epost" type="text" id="epost"> <br />
  Passord <input type="password" name="passord" id="passord">  <br/>
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
