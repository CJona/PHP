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
for ($i = 0; $i <= 10; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "a";
    }
    echo "k<br>";
}
?>
<a href="Opdrachten.php">Opdrachten Pagina</a><br>
<a href="http://localhost/new/index.php">Return Home</a>
</body>
</html>