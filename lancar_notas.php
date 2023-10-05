<?php include_once('conexao.php'); ?>

<?php



if (isset($_POST['lancar_notas'])) {

    $conexao = conexao();

    $materia =    $_POST['materia'] ? $_POST['materia']  : null;
    $nota =    $_POST['nota'] ? $_POST['nota'] : null;
    $aluno_id =    $_POST['aluno'] ? $_POST['aluno'] : null;
    $professor_id =     $_SESSION["usuario_id"] ?  $_SESSION["usuario_id"] : null;
    $observacoes =    $_POST['observacoes'] ?  $_POST['observacoes'] : null;



    // Evite SQL Injection
    $materia = $conexao->real_escape_string($materia);
    $observacoes = $conexao->real_escape_string($observacoes);

    // Consulta SQL para inserir a nota
    $sql = "INSERT INTO notas (materia, nota, aluno_id, professor_id, observacoes) 
         VALUES ('$materia', $nota, $aluno_id, $professor_id, '$observacoes')";

    if ($conexao->query($sql) === TRUE) {
        // Nota lançada com sucesso
        header("Location: lancar_notas.php");
        echo "<script>document.location='lancar_notas.php'</script>";

    } else {
        echo "Erro ao lançar a nota: " . $conexao->error;
    }

    $conexao->close();


}


?>

<!DOCTYPE html>

<html>


<head>
    <meta charset="utf-8">
    <title> ESCOLA CEP ETP DE PLANALTINA- FINS PEDAGÓGICOS-NÃO OFICIAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </link>
    <link rel="stylesheet" href="css/style.css">
    </link>
    <script src="js/bootstrap.js"></script>
</head>

<body class="bg-light">
    <div class="container-fluid ">
        <div class="p-3 bg-success text-dark border border-1 border-dark text-center ">
            <div class="container-fluid text-center ">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <a href="index.php"> <img class="img-fluid rounded " src="imagens/logo_escola.jpg" width="120px"></a>
                    </div>
                    <div class="col-lg-10">
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 fs-6">
                            <li><a href="tec_informatica.php" class="nav-link active text-white " aria-current="page">TÉCNICO EM INFORMÁTICA</a></li>
                            <li><a href="tec_ambiental.php" class="nav-link text-white">TÉCNICO AMBIENTAL</a></li>
                            <li><a href="tec_registro.php" class="nav-link text-white">TÉCNICO EM REGISTRO E INFORMAÇÃO DE SAÚDE</a></li>
                            <li><a href="tec_libras.php" class="nav-link text-white">TÉCNICO EM LIBRAS</a></li>
                            <li><a href="tec_secreariado.php" class="nav-link text-white">TÉCNICO DE SECRETARIADO ESCOLAR</a></li>
                            <li><a href="#" class="nav-link text-white"></a></li>
                            <div class="text-end">
                                <a href="login.php" class="btn btn-outline-warning me-2">Notas</a>
                                <a href="index.php#video" type="button" class="btn btn-warning">Faça um tour virtual pela Escola Física</a>
                            </div>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <?php include_once('menu_lateral_aluno.php') ?>
            </div>
            <div class="col-lg-8">
                <div class="row ">
                    <div class="col-lg-10 text-center pt-5 mt-5">
                        <div class="center-logo">
                            <img class="img-fluid rounded " src="imagens/logo_escola.jpg" width="120px">
                        </div>
                        <h2 class="mb-4 text-center center-logo">Lançar notas</h2>
                        <form method="post" action="lancar_notas.php" class="col-sm-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="aluno">Aluno:</label>
                                    <select class="form-control" name="aluno" required>
                                        <option value="">Selecione um aluno</option>
                                        <?php
                                        // Conexão com o banco de dados (substitua com suas configurações)

                                        $conexao = conexao();
                                        // Consulta SQL para selecionar todos os alunos com perfil 'aluno'
                                        $sql = "SELECT * FROM `usuarios` WHERE `perfil` = 'aluno'";
                                        $resultado = $conexao->query($sql);

                                       if ($resultado->num_rows > 0) {
                                            while ($row = $resultado->fetch_assoc()) {
                                                echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                                            }
                                        }

                                        $conexao->close();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="materia">Matéria:</label>
                                <select class="form-control" name="materia" required>
                                    <option value="">Selecione uma</option>
                                    <?php
                                    // Conexão com o banco de dados (substitua com suas configurações)

                                    $conexao = conexao();
                                    // Consulta SQL para selecionar todos os alunos com perfil 'aluno'
                                    $sql = "SELECT * FROM `materias`";
                                    $resultado = $conexao->query($sql);


                                    if ($resultado->num_rows > 0) {
                                        while ($row = $resultado->fetch_assoc()) {
                                            echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                                        }
                                    }

                                    $conexao->close();
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nota">Nota:</label>
                                <input type="number" class="form-control" name="nota" required>
                            </div>
                            <div class="form-group">
                                <label for="observacoes">Observações:</label>
                                <textarea class="form-control" name="observacoes"></textarea>
                            </div>
                            <input type="hidden" class="form-control" name="lancar_notas" value="true">

                            <button type="submit" class="btn btn-primary m-5">Lançar Nota</button>
                        </form>

                    </div>
                                    <div class="col-lg-10 text-center pt-5 mt-5">
                                        <h2 class="mb-4">Lista de Notas</h2>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Aluno</th>
                                                    <th>Matéria</th>
                                                    <th>Nota</th>
                                                    <th>Observação</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Consulta SQL para obter todas as notas lançadas
                                                $conexao = conexao();
                                                $sql = "SELECT n.id, u.nome as aluno_nome, m.nome as materia_nome, n.nota, n.observacoes
                                                FROM notas n
                                                INNER JOIN usuarios u ON n.aluno_id = u.id
                                                INNER JOIN materias m ON n.materia = m.id";
                                                // Executar a consulta SQL
                                                $resultado = $conexao->query($sql);

                                                // Verificar se a consulta teve sucesso
                                                if ($resultado === false) {
                                                    echo "Erro na consulta SQL: " . $conexao->error;
                                                } else {
                                                    // Verificar se há resultados antes de iterar
                                                    if ($resultado->num_rows > 0) {
                                                        while ($row = $resultado->fetch_assoc()) {
                                                            echo "<tr>";
                                                            echo "<td>" . $row["aluno_nome"] . "</td>";
                                                            echo "<td>" . $row["materia_nome"] . "</td>";
                                                            echo "<td>" . $row["nota"] . "</td>";
                                                            echo "<td>" . $row["observacoes"] . "</td>";
                                                            echo "<td>";
                                                            echo "<a href='editar_nota.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a>";
                                                            echo "<a href='excluir_nota.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm ml-2'>Excluir</a>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                        }
                                                    } else {
                                                        echo "Nenhuma nota encontrada.";
                                                    }
                                                }
                                                $conexao->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="contato">

<h2 id="contato"> CONTATO </h2>
<p> Entre em contato conosco </p>

<div>

    <img width="50px" src="imagens/fone.png">
    <p> <a href="tel:6190000000"> (xx)33338888 </a> </p>
    </img>

    <img width="50px" src="imagens/contato.png">
    <p> <a href="davysduncan@gmail.com"> karinesc@gmail.com </a> </p>
    </img>
</div>
</section>

<footer>
<p> Karine SC </p>
</footer>

</body>

</html>

</body>

</html>