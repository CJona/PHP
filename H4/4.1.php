<?php
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>functies</title>
        <style>

        </style>
    </head>
    <body>
    <?php
    echo "graden in fahrenheit: ".fahrenheit(20). "<br>";

    function fahrenheit($a){
        return $a * 1.8 + 32;
    }
    ?>
    <a href="Opdrachten.php">Opdrachten Pagina</a><br>
    <a href="http://localhost/new/index.php">Return Home</a>

    </body>
</html>
