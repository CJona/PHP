<?php
//$servername = "localhost";
//$username = "root";
//$password = "";

$conn = mysqli_connect("127.0.0.1", "root", "", "school");
echo "ddddd";
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
$querry = "SELECT * FROM cursist";
$result = $conn->query($querry);


//$query = "SELECt naam from cursist";
//$stmt = $conn->prepare($query) or die('Error 19');
//$stmt->execute() or die('Error 21');
//while ($naam = $stmt->fetchColumn()) {
//    echo $naam . '<br>';
//}
//echo "hbhbhbhbh";