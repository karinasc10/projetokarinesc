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
    <section id="curso-secretariado" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-primary">Curso Técnico de Secretariado Escolar</h3>
                    <p class="lead">Prepare-se para uma carreira essencial na gestão escolar. Nosso curso técnico de secretariado escolar oferece a oportunidade de se tornar um profissional qualificado na administração e organização de instituições de ensino.</p>
                    <p>Os profissionais de secretariado escolar desempenham um papel crucial na manutenção da eficiência e na promoção de um ambiente de aprendizado positivo nas escolas.</p>
                    <p>Com a crescente demanda por serviços de gestão escolar de alta qualidade, este curso oferece oportunidades de carreira estáveis e gratificantes no setor educacional.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary"></i> Gerenciamento de documentos e registros escolares</li>
                        <li><i class="fas fa-check text-primary"></i> Comunicação eficaz com pais, alunos e equipe escolar</li>
                        <li><i class="fas fa-check text-primary"></i> Organização de eventos e atividades escolares</li>
                        <li><i class="fas fa-check text-primary"></i> Apoio à administração escolar</li>
                    </ul>
                    <p>Se você é organizado, comunicativo e apaixonado por apoiar o funcionamento eficiente das escolas, nosso curso técnico de secretariado escolar é a escolha perfeita.</p>
                    <a href="inscricao.php" class="btn btn-primary">Inscreva-se agora</a>
                </div>
                <div class="col-lg-6">
                    <img src="data:image/jpeg;base64,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" class="img-fluid" alt="Curso Técnico de Secretariado Escolar">
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