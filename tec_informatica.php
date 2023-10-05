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
    <section id="curso-informatica" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-primary">Curso Técnico em Informática</h3>
                    <p class="lead">Prepare-se para uma carreira emocionante no mundo da tecnologia. Nosso curso técnico em informática oferece as habilidades e conhecimentos necessários para se destacar no mercado de trabalho.</p>
                    <p>Nosso programa de ensino é projetado para ajudá-lo a desenvolver competências práticas em programação, desenvolvimento de software, administração de redes e segurança cibernética.</p>
                    <p>Com a crescente demanda por profissionais de tecnologia da informação, nosso curso oferece uma vantagem competitiva no mercado de trabalho. Nossos instrutores experientes e currículo atualizado garantem que você esteja preparado para os desafios do setor.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success"></i> Aprenda programação em diversas linguagens, incluindo Java, Python e C++.</li>
                        <li><i class="fas fa-check text-success"></i> Domine o desenvolvimento de software, criando aplicativos e sistemas inovadores.</li>
                        <li><i class="fas fa-check text-success"></i> Explore redes e segurança cibernética para proteger sistemas e dados.</li>
                        <li><i class="fas fa-check text-success"></i> Preparação para certificações reconhecidas, como CompTIA e Cisco.</li>
                    </ul>
                    <p>Se você está buscando uma carreira empolgante e desafiadora no mundo da tecnologia, nosso curso técnico em informática é o caminho certo para você.</p>
                </div>
                <div class="col-lg-6">
                    <img src="data:image/png;base64,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" class="img-fluid" alt="Curso Técnico em Informática">
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