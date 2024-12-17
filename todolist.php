<?php
global $pdo;
require_once("database/conn.php");

    $tasks = [];
    $sql = $pdo->query("SELECT * FROM todoList");

    if($sql->rowCount() > 0){
        $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>To do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="list-section">
    <main class="todoCard">
        <div>
            <h1 class="todoTitle">To do List</h1>
        </div>
        <form action="actions/create.php" method="POST" class="createCard">
            <div>
                <input type="text" name="name" placeholder="Write your task here" required>
                <input type="text" name="description" placeholder="Write your description task here" required>
            </div>
            <button type="submit" class="createBtn">+</button>
        </form>
        <div id="tasks">
            <?php foreach ($tasks as $task): ?>
                <div class="task">
                    <input type="checkbox" name="progress" class="progress" <?= $task['completed'] ? 'checked' : '' ?>>
                    <p class="task-description"><?=htmlspecialchars($task['Name']); ?></p>
                    <div>
                        <button><a href="actions/edit.php?id=<?= $task['Id']; ?>">Edit</a></button>
                        <button><a href="actions/delete.php?id=<?= $task['Id']; ?>">Delete</a></button>
                    </div>
                </div>
            <?php endforeach; ?>

            <form class="infoTask">
                <input type="text" name="name" placeholder="Edit your name task here">
                <input type="text" name="description" placeholder="Edit your description task here">
                <button>Save</button>
            </form>

        </div>
        <a href="index.html"><button><- voltar</button></a>
    </main>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="script.js"></script>
</body>
</html>




