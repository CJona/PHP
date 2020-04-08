<!DOCTYPE html>
<html>
<head>
    <title>Kapperzaak</title>
    <style>
        body{
        }
    </style>
</head>
<body>
<?php
$kappersagenda = array('9.15' => 'Mevr. Pietersen', '9.30' => 'Mevr. Willems', '9.45' => '',
    '10.00' => 'Paul van den Broek', '10.15' => 'Karel de Meeuw', '10.30' => '');

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach ($kappersagenda as $tijd => $afspraak) {
    if ($afspraak == '') {
        print("<li>" . $tijd . "</li>");
    }
}
?>

<a href="Opdrachten.php">Opdrachten Pagina</a><br>
<a href="http://localhost/new/index.php">Return Home</a>
</body>
</html>
