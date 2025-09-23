<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/tabuada/style.css">
</head>
<body>
</body>
</html>
<?php

$valor1 = $_GET['numero1']; 
$valor2 = $_GET['numero2'];

for ($i = $valor1; $i <= $valor2; $i++) {
    for ($m = 1; $m <= 10; $m++){
        $res = $i * $m;
        echo "<div class = 'tabuada'>";
        echo $i . " x " . $m . " = " . $res . "<br>";
        echo "</div>";
    }
    echo "<br>";
}

  
?>



