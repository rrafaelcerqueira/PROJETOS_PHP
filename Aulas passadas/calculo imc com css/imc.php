<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/calculo imc com css/imc.css">
</head>
<body>
    

<?php
$resultado = "";
$imc = null;


if ($_SERVER["REQUEST_METHOD"] === "GET") {
 
    $nome   = $_GET["nome"];
    $peso   = $_GET["peso"] ;
    $altura = $_GET["altura"];

       if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);
              
 
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc < 24.9) {
            $classificacao = "Peso normal";
        } elseif ($imc < 29.9) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        $resultado = "$nome, seu IMC é " . number_format($imc, 2, ',', '.') . " - $classificacao.";
    }
    $stringhtml = "<html>
                    <body>
                        <button class:'botao' onclick='mostrarAlerta()'>Resultado</button>

                        <script>
                                function mostrarAlerta() {
                                        alert('". $resultado . "');
                                }
                        </script>
                    </body>
                </html>";
    echo("$stringhtml");

    
}
else{
   echo("Erro no envio das informações");
}
?>

</body>
</html>


