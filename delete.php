<?php
    include 'db.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM aulas WHERE id_aula=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Seu registro foi excluído com sucesso";
    } else {
        echo "Algo de errado aqui!" . $sql . "<br>" . $conn->error;
    }

    $conn -> close();

    header ("Location: index.php");
    exit();
?>
