<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>busreis</title>
    <style>
        body{
        }


    </style>
</head>
<body>
<?php
$leeftijd = 2;
$bedrag = 10;
if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd < 3) {
    $bedrag = 0;
}
echo $bedrag. "<br>";

?>
<a href="Opdrachten.php">Opdrachten Pagina</a><br>
<a href="http://localhost/new/index.php">Return Home</a>
</body>
</html>
