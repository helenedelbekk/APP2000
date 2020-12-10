<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database */
$host="s381.usn.no";
$username="usr_valg";
$password="pw_valg2021";
$database="valg2021"; /* verdier satt for host, user, password og database for tilkobling til databaseserver */

// Create connection
$conn= mysqli_connect($host,$username,$password,$database);
// Check connection
if (!$conn) {
  die("Denne funket ikke" );
}

/*
Denne siden er utviklet av Helene Delbekk, sist oppdatert av Helene Delbekk den 06.12.2020.
Kontrollert sist av Johs Hildebrand den 06.12.2020.
*/

?>
