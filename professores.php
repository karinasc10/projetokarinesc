<?php include_once('conexao.php');

if(isset($_GET['sair']) && $_GET['sair'] == 'true' ){
    session_destroy();



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
<body>
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
    <div class="container-fluid ">
        <!-- ======= Hero Section ======= -->
        <section id="" class="d-flex align-items-center w-100">
            <img src="imagens/ead.jpeg" class="" width="100%" height="600px">

            <div class="container position-absolute text-white fs-6" style="font-size: 30px;" data-aos="fade-up" data-aos-delay="1500">
                <h1 style="font-size: 90px;">Bem vindo a Nossa Escola</h1>
                <h2>A melhor escola de Planaltina</h2>
                <button type="button" class="btn btn-warning">Faça um tour virtual pela Escola Física</button>

            </div>
    </div>
    <div class="container">
    <h2>Quadro Docente da Escola Técnica de Planaltina</h2>
    <div class="row">
      <div class="col-md-6">
        <h3>Curso Técnico de Informática</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <strong>Davys Luis Paxiuba Duncan</strong>
          </li>
        </ul>
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