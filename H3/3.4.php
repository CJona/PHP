<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Border Loop</title>
    <style>
        body{
        }

        .rood {
            border: red solid 5px;
        }
        .groen {
            border: lawngreen solid 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i <= 9; $i++){
    if ($i % 2 == 0){
        $class = "class= 'rood'";
    } else {
        $class = "class= 'groen'";
    }
    echo "<img ".$class. "src='img/img/aap".$i.".jpg'>";
}

?>
<a href="Opdrachten.php">Opdrachten Pagina</a><br>
<a href="http://localhost/new/index.php">Return Home</a>
</body>
</html>

