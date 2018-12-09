<?php
// Datele pt. conectare la serverul si baza de date MySQL
$host = "localhost";         // Serverul MySQL
$utilizator = "root";         // Utilizator pt. server
$parola = "";         // Parola utilizator
$numebd = 'elevi';         // Numele bazei de date

$conn=mysqli_connect($host,$utilizator,$parola);
// Conectarea la server
if (mysqli_connect_errno())
  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// daca nu avem o baza de date, ne facem una
$sql = "CREATE DATABASE ".$numebd.";";
If ($conn->query($sql) === FALSE)
{
	if (mysqli_error($conn)!="Can't create database 'elevi'; database exists")
		echo "<h4>Baza de date <u>elevi</u> nu a putut fi creat deoarece - ".mysqli_error($conn). "</h4>";
}
$conn=mysqli_connect($host,$utilizator,$parola,$numebd);
// Conectarea la baza de date
if (mysqli_connect_errno())
  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 
