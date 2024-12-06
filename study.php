<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP STUDY</title>
</head>
<body>
<section>
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

        echo $n1 + $n2 + $n3 * $n4;
        echo "<br>" . $site, " e ", $cursoemvideo;

        ?>
        <a href="index.html">voltar</a>
    </div>
</section>
</body>
</html>



