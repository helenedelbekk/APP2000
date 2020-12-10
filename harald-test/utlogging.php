<?php  /* utlogging  */
/*
/*  Programmet logger ut en bruker fra applikasjonen
*/
  session_start();
  session_destroy();  /* sesjonen avsluttes */

  print("<meta http-equiv='refresh' content='0;url=index.php'>");
  /* redirigering tilbake til innloggings-siden (innlogging.php) 
  Denne siden er utviklet av Helene Delbekk, sist oppdatert av Mathias Blokkhus den 07.12.2020.
  Kontrollert sist av Mathias Blokkhus den 09.12.2020.
  */
?>
