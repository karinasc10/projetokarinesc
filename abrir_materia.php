<?php include_once('conexao.php'); 



// Verifique se o 'id' da nota foi fornecido na URL

$materia_id = $_GET['id'];
$conexao = conexao();
$sql = "SELECT * FROM `materias` WHERE `id` = $materia_id";
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
    <title> ESCOLA CEP ETP DE PLANALTINA- FINS PEDAGÓGICOS-NÃO OFICIAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </link>
    <link rel="stylesheet" href="css/style.css">
    </link>
    <script src="js/bootstrap.js"></script>
    <script src="js/editor.js"></script>

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
            <div class="col-sm-9">
                <div class="row ">
                    <div class="col-lg-10 text-center pt-5 mt-5">
                        <div class="center-logo">
                            <img class="img-fluid rounded " src="imagens/logo_escola.jpg" width="120px">
                        </div>
                        <h2 class="mb-4 text-center center-logo"><?= $notas['nome'] ?></h2>
                        <div class="containter-fluid"><?= $notas['descricao'] ?></div>
                        <div class="containter-fluid"><?= $notas['conteudo'] ?></div>
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


<script>
var container = document.getElementById('editor');
</script>