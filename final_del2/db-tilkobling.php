<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database */
$host="itfag.usn.no";
$username="233585";
$password="kryssord123";
$database="233585"; /* verdier satt for host, user, password og database for tilkobling til databaseserver */

// Create connection
$conn= mysqli_connect($host,$username,$password,$database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/*
Denne siden er utviklet av Helene Delbekk, sist oppdatert av Helene Delbekk den 06.12.2020.
Kontrollert sist av Johs Hildebrand den 06.12.2020.
*/

?>
