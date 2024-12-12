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

        $messages = [
            'error' => 'Não foi possível realizar a operação',
            'success' => 'Operação realizada com sucesso',
        ];

    echo $messages['error'];
    ?>
</section>
</body>
</html>




