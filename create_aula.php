<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inserir as aulas</title>
    </head>
    <body>
    <form method="post" action="create_aulas.php">
            <h1> Adicionar aulas</h1>
            Turma: <input type="text" name="sala" required> <br></br>
            Matéria: <input type="text" name="materia" required> <br></br>
            Data: <input type="date" name="data" required> <br></br>
            <input type="submit" value="Adicionar">
        </form>
    </body>
</html>


<?php
    include 'db.php';

    if (isset($_POST['create_aulas'])) {
        $sala = $_POST['sala'];
        $materia = $_POST['materia'];
        $data = $_POST['data'];

        $sql = "INSERT INTO aulas (sala, materia, data_aula) VALUES ('$sala', '$materia', '$data')";

        if ($conn->query($sql) === TRUE) {
            echo "Seu novo registro foi criado com sucesso";
        } else {
            echo "Algo deu errado:( " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>
