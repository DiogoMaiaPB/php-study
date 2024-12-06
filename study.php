<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP STUDY</title>
</head>
<body>
<section class="w-full h -full flex item-center justify-center">
    <div>
        <?php
        $name = $_GET['name'];
        $cpf = '123.123.1232.00';
        $carros = ['clio', 'logan', 'gol', 'audi A3', 'civic'];
        $n1 = 2;
        $n2 = 3;
        $n3 = 4;
        $n4 = 5;
        $n5 = 6;
        $s = $n1 + $n2;
        $birthdate = $_GET["birthdate"];
        $site = "cursoemvideo";
        $$site = "cursoPHP";
        $a = 3;
        $b = 2;
        $maior = $a>$b ? $a : $b;
        $nickname = null;
        $ano = $birthdate;
        $idade = 2024 - $ano;

        echo "$name nasceu no ano $ano e ele deve ter $idade anos de idade";
        $tipo = ($idade > 18 && $idade < 65) ? "Seu voto é obrigatório" : "Seu voto não é obrigatório";
        echo "<br> ", $tipo;
//
//        if ($idade<16) {
//            $tipoVoto = "não vota";
//        } elseif ($idade>=16 && $idade<18 or $idade>=65) {
//                $tipoVoto = "voto opcional";
//            } else {
//                $tipoVoto = "voto obrigatório";
//        }

        $tipoVoto = ($idade < 16) ? "não vota" : (($idade >= 16 && $idade < 18) || $idade > 65
            ? "voto opcional" : "voto obrigatorio");

        echo "<br> ", $tipoVoto;


//        echo $n1 + $n2 + $n3 * $n4;
//        echo "<br>" . $site, " e ", $cursoemvideo;
//        echo "<br>" . $maior, "<br>";
//        echo "<br>" . ($nickname ? $nickname : $name);

        ?>
        <br>
        <a href="index.html">voltar</a>
    </div>
</section>
</body>
</html>



