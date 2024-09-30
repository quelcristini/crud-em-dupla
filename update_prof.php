<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update professor</title>
</head>
<body>
    
    <form method="POST" action=" update_prof.php?id=<?php echo $row['id_professor'];?>">
        <h1> Para atualizar os dados do professor, insira: </h1>
        <label for="nome">O nome atualizado:</label>
        <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
        <label for="e-mail">O e-mail atualizado:</label>
        <input type="e-mail" name="e-mail" value="<?php echo $row['e-mail']; ?>" required><br><
        <input type="submit" value="Atualizar">
    </form>

</body>
</html>

<?php
    include 'db.php';

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $email = $_POST['e-mail'];

        $sql = "UPDATE professores SET nome='$nome', e-mail='$email' WHERE id_professor=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Seu registro foi atualizado com sucesso";
        } else {
            echo "Algo de errado aqui!" . $sql . "<br>" . $conn->error;
        }

        $conn ->close();
        header ("Location: index.php");
        exit();
    }

    $sql = "SELECT * FROM professores WHERE id_professor='$id'";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();


?>

