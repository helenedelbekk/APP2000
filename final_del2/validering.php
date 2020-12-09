<?php  /* sjekk */
/*
/*  Programmet inneholder en funksjon for å sjekke om epost, passord og brukertype er korrekt
*/

function sjekkEpostPassordBrukertype($epost,$passord,$brukertype)
{
/*
/*  Hensikt
/*    Funksjonen sjekker om epost og passord er korrekt
/*  Parametre
/*    $epost = eposten som skal sjekkes
/*    $passord = passordet som skal sjekkes
/*  Funksjonsverdi/Returverdi
/*    Funksjonen returnerer true hvis epost og passord er korrekt
/*    Funksjonen returnerer false ellers
*/

  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */

  $lovligBruker=true;

  $sqlSetning="SELECT * FROM bruker WHERE epost='$epost';";
  $sqlResultat=mysqli_query($conn,$sqlSetning);  /* SQL-setning sendt til database-serveren */

  if (!$sqlResultat)  /* eposten er ikke registrert i databasen eller SQL-setningen var ikke vellykket (tilsvarer or die)  */
    {
      $lovligBruker=false;
    }
  else
   {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $lagretPassord=$rad["passord"];  /* passord hentet fra databasen */

      if($passord!=$lagretPassord)
        {
          $lovligBruker=false;
        }
    }
  return $lovligBruker;
}
/* redirigering tilbake til innloggings-siden (innlogging.php) */
/*
Denne siden er utviklet av Helene Delbekk, sist oppdatert av Helene Delbekk den 08.12.2020.
Kontrollert sist av Johs Hildebrand den 09.12.2020.
*/
?>
