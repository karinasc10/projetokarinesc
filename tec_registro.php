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
                <a href="index.php#video" type="button" class="btn btn-warning">Faça um tour virtual pela Escola Física</a>

            </div>
    </div>

    <div id="conteudo">
    <section id="curso-saude" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-info">Curso Técnico em Registro e Informação de Saúde</h3>
                    <p class="lead">Prepare-se para uma carreira essencial no setor de saúde. Nosso curso técnico em Registro e Informação de Saúde oferece a base de conhecimento necessária para trabalhar na gestão de registros de saúde e informações médicas.</p>
                    <p>Os profissionais deste campo desempenham um papel fundamental na organização e precisão das informações de pacientes, garantindo que os dados médicos sejam mantidos com segurança e confidencialidade.</p>
                    <p>Com a crescente demanda por serviços de saúde, este curso oferece oportunidades de carreira estáveis e gratificantes no setor de saúde.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-info"></i> Compreensão de terminologia médica e codificação</li>
                        <li><i class="fas fa-check text-info"></i> Gestão de registros eletrônicos de saúde</li>
                        <li><i class="fas fa-check text-info"></i> Ética e regulamentações de privacidade de dados de saúde</li>
                        <li><i class="fas fa-check text-info"></i> Colaboração com profissionais de saúde</li>
                    </ul>
                    <p>Se você está interessado em uma carreira que combina cuidado com informações precisas e a importância de manter registros médicos confiáveis, nosso curso técnico em Registro e Informação de Saúde é a escolha certa.</p>
                </div>
                <div class="col-lg-6">
                    <img src="data:image/jpeg;base64,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" class="img-fluid" alt="Curso Técnico em Registro e Informação de Saúde">
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