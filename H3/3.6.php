<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Zwemclubs</title>
    <style>
        body{
        }
        table, tr, td {
            border: solid black 1px;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        img {
            height: 30px;
            width: 30px;
        }

    </style>
</head>
<body>
<table>
<?php
$clubs["De spartelkuikens"] = "25";
$clubs["De waterbuffels"] = "32";
$clubs["Plonsmderin"] = "11";
$clubs["Bommetje"] = "23";

foreach ($clubs as $clubnaam => $zwemmers) {
    echo '<tr>';
    // Clubnamen
    echo "<td>$clubnaam</td>";

    // zwemaantal
    echo "<td>$zwemmers</td>";

    //PLAATJES
    echo '<td class="plaatjes">';
    $plaatsjes = floor($zwemmers / 5);
    for ($i = 0; $i <= $plaatsjes; $i++) {
        echo '<img class="Foto" src="../img/zwem-pictogram.jpg" alt="plaatje">';
    }
    echo '</td>';
    echo '</tr>';
}
?>
</table>

<a href="Opdrachten.php">Opdrachten Pagina</a><br>
<a href="http://localhost/new/index.php">Return Home</a>
</body>
</html>
