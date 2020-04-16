<?php

if ( $_POST['voornaam'] == ""){
    echo "<br>Je moet je naam invullen !";
    echo "<br><a href=\"Formulier1.html\">Terug naar het formulier</a>";
}
if ( $_POST['adres'] == ""){
    echo "<br>Je moet je adres in vullen !";
    echo "<br><a href=\"Formulier1.html\">Terug naar het formulier</a>";
}
if ( $_POST['email'] == ""){
    echo "Je moet je email invullen !";
    echo "<br><a href=\"Formulier1.html\">Terug naar het formulier</a>";
}
if ( $_POST['wachtwoord'] == ""){
    echo "Je moet je wachtwoord invullen !";
    echo "<br><a href=\"Formulier1.html\">Terug naar het formulier</a>";
}
