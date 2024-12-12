<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP STUDY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="w-full h -full flex item-center justify-center">
    <?php
        $counter = isset($_GET['counter']) ? (int)$_GET['counter'] : 0;
        if (isset($_POST['add'])){
            $counter++;
        }elseif (isset($_POST['sub'])){
            $counter--;
        }
    ?>
    <div>
        <h1><?php
            echo $counter;
            ?></h1>
        <form method="POST">
            <input type="hidden" name="counter" value="<?php echo $counter; ?>"/>
            <button type="submit" name="add">Adicionar</button>
            <button type="submit" name="sub">Diminuir</button>
        </form>
    </div>
    <a href="index.html"><button>voltar</button></a>
</section>
</body>
</html>




