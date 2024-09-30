
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>inserindo profs</title>
    </head>
    <body>
        <form method="post" action="create_prof.php">
            <h1> Adicionando os professores</h1>
            Nome do seu professor: <input type="text" name="nome" required> <br></br>
            E-mail do professor: <input type="e-mail" name="e-mail" required> <br></br>
            <input type="submit" name="create_profs" value="Adicionar">
        </form>
        <div>
            <a href="index.php">Voltar ao INDEX</a>
        </div>
    </body>
</html>

<?php
include 'db.php';

    if (isset($_POST['create_profs'])) {
        $nome = $_POST['nome'];
        $email = $_POST['e-mail'];

        $sql = "INSERT INTO professores (nome, e-mail) VALUES ('$nome', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Seu novo registro foi criado com sucesso";
        } else {
            echo "Algo deu errado:(" . $sql . "<br>" . $conn->error;
        }
    } 

    $sql = "SELECT * FROM professores;";

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0){
        echo "<table border='1'>
            <tr>
                <th> ID Professor </th>
                <th> Nome </th>
                <th> E-mail </th>
            </tr>";
            while($row = $result -> fetch_assoc()){
                echo "<tr>
                        <td> {$row['id_professor']} </td>
                        <td> {$row['nome']} </td>
                        <td> {$row['e-mail']} </td>
                        <td>
                            <a href='update.php?id={$row['id_professor']}'>Editar</a> |
                            <a href='delete_prof.php?id={$row['id_professor']}'>Excluir</a>
                        </td>
                    </tr>";
            }
        echo "</table>";
    }else{
        echo "Nenhum registro foi encontrado:( ";
    }

?>
