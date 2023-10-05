<?php include_once('conexao.php'); ?>

<?php
if (isset($_POST['editar_notas'])) {
    $conexao = conexao();
    $nota = $_POST['nota'] ? $_POST['nota'] : null;
    $observacoes = $_POST['observacoes'] ? $_POST['observacoes'] : null;

    // Evite SQL Injection
    $nota_id = $_GET['id']; // ID da nota a ser editada
    $nota = $conexao->real_escape_string($nota);
    $observacoes = $conexao->real_escape_string($observacoes);

    // Consulta SQL para atualizar a nota
    $sql = "UPDATE notas SET nota = '$nota', observacoes = '$observacoes' WHERE id = $nota_id";

    if ($conexao->query($sql) === TRUE) {
        // Nota editada com sucesso
        header("Location: lancar_notas.php");
        echo "<script>document.location='lancar_notas.php'</script>";

    } else {
        echo "Erro ao editar a nota: " . $conexao->error;
    }

    $conexao->close();
}

// Verifique se o 'id' da nota foi fornecido na URL

    $nota_id = $_GET['id'];
    $conexao = conexao();
    $sql = "SELECT * FROM `notas` WHERE `id` = $nota_id";
    $resultado = $conexao->query($sql);
    $conexao->close();
    if ($resultado->num_rows > 0) {
        $notas = $resultado->fetch_assoc();
    ?> <?php } else {
        echo "Nota não encontrada.";
    }

 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ESCOLA CEP ETP DE PLANALTINA - FINS PEDAGÓGICOS-NÃO OFICIAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php include_once('menu_lateral_aluno.php') ?>
            </div>
            <div class="col-sm-8">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-5 text-center pt-5 mt-5">
                        <div class="center-logo">
                            <img class="img-fluid rounded" src="imagens/logo_escola.jpg" width="120px">
                        </div>
                        <h2 class="mb-4 text-center center-logo">Editar Nota</h2>
                        <form method="post" action="editar_nota.php?id=<?= $nota_id ?>">
                            <div class="form-group">
                                <label for="nota">Nota:</label>
                                <input type="number" class="form-control" name="nota" required value="<?= $notas['nota'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="observacoes">Observações:</label>
                                <textarea class="form-control" name="observacoes"><?= $notas['observacoes'] ?></textarea>
                            </div>
                            <input type="hidden" class="form-control" name="editar_notas" value="true">
                            <button type="submit" class="btn btn-primary m-5">Editar Nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
