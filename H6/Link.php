<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>link</title>
    <style>
    table, tr, td{
        border: solid 1px black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=school;port=3308", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "connected successfully";
}
catch (PDOException $e)
{
    echo "connection failed:" . $e->getMessage() . '<br>';
}


$query = "SELECT * from cursist";
$stmt = $conn->prepare($query) or die('Error 19');
$stmt->execute() or die('Error 21');

echo '<table>';

while ($array = $stmt->fetch()) {
    echo '<tr>';
    echo "<td>" . $array['cursistnr'] . "</td>";
    echo "<td>" . $array['naam'] . "</td>";
    echo "<td>" . $array['roepnaam'] . "</td>";
    echo "<td>" . $array['straat'] . "</td>";
    echo "<td>" . $array['postcode'] . "</td>";
    echo "<td>" . $array['plaats'] . "</td>";
    echo "<td>" . $array['geslacht'] . "</td>";
    echo "<td>" . $array['geb_datum'] . "</td>";
    echo '</tr>';
}
echo '</tables>';
?>
<a href="Opdrachten.html">terug naar Opdrachten </a>


</body>
</html>