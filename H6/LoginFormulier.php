<?php

$host = 'localhost';
$username = 'root';
$password = '';

$gebruikersnaam = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

$database = new PDO('mysql:host=localhost; dbname=school; port=3308', $username, $password);

$inloggen = $database->query("select * from login where gebruikersnaam ='$gebruikersnaam' and wachtwoord = '$wachtwoord'")
or die("Error while searching");

if ($inloggen->fetch()) {
    echo "Welkom!";
} else {
    echo "Sorry geen toegang!";
}