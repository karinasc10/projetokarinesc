<?php
 include_once('conexao.php'); 

// Verifique se o aluno está autenticado (você pode adicionar mais verificações de segurança, se necessário)
if (!isset($_SESSION["usuario_id"]) || $_SESSION["perfil"] !== "aluno") {
    header("Location: index.php"); // Redirecionar para a página de login ou outra página apropriada
    echo "<script>document.location='index.php'</script>";

    exit();
}

// Conexão com o banco de dados (substitua com suas configurações)
$conexao = conexao();

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

$aluno_id = $_SESSION["usuario_id"];

// Consulta SQL para obter as notas do aluno
$sql = "SELECT m.nome AS materia, n.nota, n.observacoes
        FROM notas n
        INNER JOIN materias m ON n.materia = m.id
        WHERE n.aluno_id = $aluno_id";


$resultadoss = $conexao->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Suas Notas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
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
            <div class="col-sm-3">
                <?php include_once('menu_lateral_aluno.php') ?>
            </div>
            <div class="col-sm-8">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-10 text-center pt-5 mt-5">
                        <div class="center-logo">
                            <img class="img-fluid rounded" src="imagens/logo_escola.jpg" width="120px">
                        </div>
                        <h2 class="mb-4 text-center center-logo">Suas Notas</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Matéria</th>
                                    <th>Nota</th>
                                    <th>Observações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($resultadoss->num_rows) {
                                    while ($row = $resultadoss->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["materia"] . "</td>";
                                        echo "<td>" . $row["nota"] . "</td>";
                                        echo "<td>" . $row["observacoes"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3'>Nenhuma nota encontrada.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
