<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP STUDY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="w-full h -full flex item-center justify-center">
    <div>
        <?php
        $name = null;
        $cpf = '123.123.1232.00';
        $carros = ['clio', 'logan', 'gol', 'audi A3', 'civic'];
        $n1 = 2;
        $n2 = 3;
        $n3 = 4;
        $n4 = 5;
        $n5 = 6;
        $s = $n1 + $n2;
        $birthdate = null;
        $site = "cursoemvideo";
        $$site = "cursoPHP";
        $a;
        $b = 2;
        $maior = $a>$b ? $a : $b;
        $nickname = null;
        $ano = $birthdate;
        $idade = 2024 - $ano;
        $tabuada = $_GET["tabuada"];
        $vezes;
        $valor;
        $primo;
        $n;

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
        echo "<br>";

        $a = $n1 - $n2 + $n3 - $n4;
        echo "O valor de A é ", $a,", e o valor de b é ",$b, "<br>";

        if ($a > $b) {
            echo "A é maior que b";
        } elseif ($a < $b) {
            echo "B maior que a";
        }
        while ($a <= 10) {
            echo "<br>", $a;
            $a ++;
        }

        echo "<br>", $a;

        //for
        for ($n = 1; $n <= 10; $n++) {
            echo "<br>", $n;
        }

        echo "<br>";


        //        echo $n1 + $n2 + $n3 * $n4;
//        echo "<br>" . $site, " e ", $cursoemvideo;
//        echo "<br>" . $maior, "<br>";
//        echo "<br>" . ($nickname ? $nickname : $name);

        ?>
        <br>
        <a href="index.html">voltar</a>
    </div>

    <div>
        <?php
        $vezes = $_GET["vezes"];
        $valor = $_GET["valor"];
        $resultado;
        $quantidade = 0;


            echo "<br>","você selecionou a tabuada de ", $valor,  " até ", $vezes, "<br>";

            // do e do while
            do {
                $resultado = $valor * $quantidade;
                echo "<br>", $valor ," x ",$quantidade, " = ", $resultado, "<br>";
                $quantidade++;
            } while($quantidade <= $vezes);

        ?>
    </div>
    <div>
        <?php
        $nmr = $_GET['nmr'] ?? 00;
        $resposta = 0;

        function verNumero ($nmr) {
            if ($nmr == 0) {
                return  "Coloque um número";
            }elseif ($nmr > 1) {
                return "Seu número é maior que 1";
            }elseif ($nmr == 1) {
                return "Vocẽ digitou um numero primo";
            }
        }
        ?>
        <div>
            <br>
            <h1> Digite um numero!</h1>
            <br>
            <form method='GET'>
                <input name='nmr' type="number" required>
                <button type='submit'>Ver numero</button>
            </form>
            <br>
            <br>
        </div>
        <?php
            $p = "Leite";
            $pr = 4.5;
            printf("O %s custa R$ %.2f <br>", $p, $pr);
            echo "Vocẽ escolheu o numero ", $nmr, "<br>", verNumero($nmr);
            echo "<br>";
            $v[0] = 4;
            $v[1] = 8;
            $v[2] = 12;
            var_export($v);
            $t = "  Aqui temos um texto gigante criado pelo maluco guanabara  ";
            $r = wordwrap($t, 5, "<br>", false);
            echo "<br>", $r;
            $tamanho = strlen($t);
            echo "<br>", $tamanho;
            $novotamanho = trim($t);
            echo "<br>", $novotamanho, "<br>";
            echo (strlen($novotamanho));
            $nomezin = "Guanabara";
            $newname = str_pad($nomezin,30, "0", STR_PAD_LEFT);
            echo "<br>";
            print ("o mano $newname é brabo");
        ?>
    </div>

</section>
</body>
</html>



