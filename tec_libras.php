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
    </div>
    <div class="container-fluid ">
        <!-- ======= Hero Section ======= -->
        <section id="" class="d-flex align-items-center w-100">
            <img src="imagens/ead.jpeg" class="" width="100%" height="600px">

            <div class="container position-absolute text-white fs-6" style="font-size: 30px;" data-aos="fade-up" data-aos-delay="1500">
                <h1 style="font-size: 90px;">Bem vindo a Nossa Escola</h1>
                <h2>A melhor escola de Planaltina</h2>
                <a href="index.php#video" type="button" class="btn btn-warning">Faça um tour virtual pela Escola Física</a>

            </div>
    </div>

    <div id="conteudo">
    <section id="curso-libras" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-warning">Curso Técnico em Libras</h3>
                    <p class="lead">Prepare-se para se tornar um facilitador na comunicação entre pessoas surdas e ouvintes. Nosso curso técnico em Libras oferece a oportunidade de dominar a Língua Brasileira de Sinais e desempenhar um papel fundamental na inclusão e acessibilidade.</p>
                    <p>Os profissionais de Libras são essenciais em diversas áreas, incluindo educação, saúde, serviço público e muito mais. Este curso oferece uma base sólida para comunicar-se efetivamente com a comunidade surda e promover a igualdade de oportunidades.</p>
                    <p>Com a crescente conscientização sobre a importância da inclusão, este curso oferece oportunidades de carreira gratificantes e a chance de fazer a diferença na vida das pessoas.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-warning"></i> Dominar a Língua Brasileira de Sinais (Libras)</li>
                        <li><i class="fas fa-check text-warning"></i> Facilitar a comunicação entre surdos e ouvintes</li>
                        <li><i class="fas fa-check text-warning"></i> Trabalhar em escolas, hospitais, agências governamentais e muito mais</li>
                        <li><i class="fas fa-check text-warning"></i> Promover a inclusão e acessibilidade para todos</li>
                    </ul>
                    <p>Se você tem paixão por aprender e promover a inclusão de pessoas surdas, nosso curso técnico em Libras é a escolha ideal para você.</p>
                </div>
                <div class="col-lg-6">
                    <img src="data:image/jpeg;base64,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" class="img-fluid" alt="Curso Técnico em Libras">
                </div>
            </div>
        </div>
    </section>
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