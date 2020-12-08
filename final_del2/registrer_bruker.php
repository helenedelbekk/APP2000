<?php
include 'start_3.php';
?>



<h3>Registrer bruker </h3>

<form action="" id="registrerBrukerSkjema" name="registrerBrukerSkjema" method="post">
  Epost <input name="epost" type="text" id="epost" required> <br />
  Passord <input type="password" name="passord" type="text" id="passord" required>  <br />
  Brukertype
  <select class="brukertype" name="brukertype">
    <option value="1">Bruker</option>
    <option value="2">Admin</option>
    <option value="3">Kontrollor</option>
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
