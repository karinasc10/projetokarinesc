<?php include_once('conexao.php');?>

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
                            <li><a href="#" class="nav-link active text-white " aria-current="page">TÉCNICO EM INFORMÁTICA</a></li>
                            <li><a href="#" class="nav-link text-white">TÉCNICO AMBIENTAL</a></li>
                            <li><a href="#" class="nav-link text-white">TÉCNICO EM REGISTRO E INFORMAÇÃO DE SAÚDE</a></li>
                            <li><a href="#" class="nav-link text-white">TÉCNICO EM LIBRAS</a></li>
                            <li><a href="#" class="nav-link text-white">TÉCNICO DE SECRETARIADO ESCOLAR</a></li>
                            <li><a href="#" class="nav-link text-white"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
               <?php include_once('menu_lateral_aluno.php')?>
             </div>
             <div class="col-sm-7">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-5  text-center pt-5 mt-5">
                    <div class="center-logo">
                        <img class="img-fluid rounded " src="imagens/logo_escola.jpg" width="120px">
                    </div>
                    <h2 class="mb-4 text-center center-logo">Área do Aluno</h2>
                </div>
            </div>
        </div>
        </div>


</body>

</html>