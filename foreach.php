<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Foreach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="w-full h -full flex item-center justify-center">
   <div>
       <?php
        $cad = array("nome" => "Ana",
            "idade" => 23,
            "sexo" => "Feminino",
            "peso" => 50.5,);

        foreach ($cad as $cadCampo => $cadConteudo) {
            echo "O campo $cadCampo recebe $cadConteudo <br>";
        }
       ?>
   </div>
    <a href="index.html"><button>voltar</button></a>
</section>
</body>
</html>




<?php
