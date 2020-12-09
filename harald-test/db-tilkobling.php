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
?>
