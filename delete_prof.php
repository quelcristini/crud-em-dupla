<?php
    include 'db.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM professores WHERE id_professor=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Seu registro foi excluído com sucesso";
    } else {
        echo "Algo de errado aqui!" . $sql . "<br>" . $conn->error;
    }

    $conn -> close();

    header ("Location: create_prof.php");
    exit();
?>
