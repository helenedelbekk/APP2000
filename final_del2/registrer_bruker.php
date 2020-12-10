<?php
include 'start_3.php';
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stilark.css">
    <title>Vestfold Gruppe 12|Nominering</title>
</head>

<body>

<article class="bruker-page">
 <section class="form">
   <h3>Registrer bruker </h3> <br>
<form action="" id="registrerBrukerSkjema" name="registrerBrukerSkjema" method="post">
  Epost <input name="epost" type="text" id="epost" required> <br />
  Passord <input type="password" name="passord" type="text" id="passord" required>  <br />
  Brukertype
  <select class="brukertype" name="brukertype">
    <option value="1">Bruker</option>
    <option value="2" disabled>Admin</option>
    <option value="3" disabled>Kontrollor</option>
  </select> <br><br>

  <input type="submit" name="registrerBrukerKnapp" value="Registrer bruker">
  <input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
</form>

<script type="text/javascript" language="JavaScript">
document.forms['registrerBrukerSkjema'].elements['epost'].focus();
</script>

<?php
  if (isset($_POST ["registrerBrukerKnapp"]))
    {
      include("db-tilkobling.php");

      $epost=$_POST ["epost"];
      $salt="IT2_2021";
      $passord=$_POST["passord"].$salt;
      $passord=sha1($passord);
      $brukertype=$_POST["brukertype"];

      if (!$epost || !$passord || !$brukertype)
        {
          print ("Epost og passord m&aring; fylles ut <br />");
        }
      else
        {
          $sqlSetning="SELECT * FROM bruker WHERE epost ='$epost';";
          $sqlResultat=mysqli_query($conn,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");

          if (mysqli_num_rows($sqlResultat)!=0)  /* epostet er registrert fra før */
            {
              print ("Eposten er registrert fra f&oslash;r <br />");
            }
          else
            {
              $sqlSetning="INSERT INTO bruker VALUES('$epost','$passord', '$brukertype');";
              mysqli_query($conn,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");

              print ("F&oslash;lgende data er n&aring; registrert: <br /> ");
              print ("Epost: $epost <br /> Brukertype: $brukertype <br />");
              print ("<a href='login.php'>G&aring; til innloggingsside </a>");
            }

        }
    }
?>

</section>
</article>
</body>
<?php
/*
Denne siden er utviklet av Helene Delbekk, sist oppdatert av Helene Delbekk den 09.12.2020.
Kontrollert sist av Mathias Blokkhus den 09.12.2020.
*/
?>
</html>
