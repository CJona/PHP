<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kerstboom</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for ($i = 0; $i <= 77; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "*<br>";
}
?>
<a href="Opdrachten.php">Opdrachten Pagina</a><br>
<a href="http://localhost/new/index.php">Return Home</a>
</body>
</html>