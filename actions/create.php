<?php
global $pdo;
require_once('../database/conn.php');

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

    if ($name && $description) {
        $sql = $pdo->prepare("INSERT INTO todoList (Name,description) VALUES (:name, :description)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':description', $description);
        $sql->execute();

        header('Location: ../todolist.php');
        exit;
    }else {
        header('Location: ../todolist.php');
        exit;
    }
?>
