<?php


print_r($_POST['apen']);

foreach ($_POST['apen'] as $aap){
    echo "<img src='img/".$aap.".jpg'>";
}