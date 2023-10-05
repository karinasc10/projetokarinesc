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
                                <a href="#video" type="button" class="btn btn-warning">Faça um tour virtual pela Escola Física</a>
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
                <a href="#video" type="button" class="btn btn-warning">Faça um tour virtual pela Escola Física</a>

            </div>
    </div>
    <div class="container-fluid mt-5 text-center  justify-content-center">
        <div class="row  justify-content-center align-items-center">
        <div class="col-sm-12 col-lg-3">
                <div class="card mb-3 border-0" style="">
                    <div class="row g-0 align-items-center">
                        <div class=" col-md-12">
                      <a href="coordenadores.php">  <img src="imagens/coordenador.png" class="img-fluid rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Coordenadores</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="card mb-3 border-0" style="">
                <div class="row g-0 align-items-center">
                <div class=" col-md-12">
                <a href="https://etp.se.df.gov.br/ead1/">        <img src="imagens/plataforma-moodle.png" class="img-fluid rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Sala de Aula</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-lg-3">

            <div class="card mb-3 border-0" style="">
                <div class="row g-0 align-items-center">
                <div class=" col-md-12">
                <a href="professores.php">             <img src="imagens/professores.jpg" class="img-fluid rounded-start" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Professores</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">

            <div class="card mb-3 border-0" style="">
                <div class="row g-0 align-items-center">
                <div class=" col-md-12">
                        <img src="imagens/cep_etp.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title">Escola Tecnica de Planaltina</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid">
        <section id="sobre" class="m-5 p-5">
            <h2> SOBRE </h2>
            <p> Centro de Educação Profissional Escola Técnica de Planaltina - Cep Etp é uma escola técnica em Brasília/DF,
                no bairro Setor Hospitalar (Planaltina) que iniciou em 2004. Oferece cursos técnicos nas modalidades a distância (ead) e
                presencial. Saiba mais abaixo e entre em contato com Centro de Educação Profissional Escola Técnica de Planaltina - Cep </p>
            <a href="#contato" class="botao"> ENTRE EM CONTATO </a>
        </section>

    </div>

    <div class="container" id="">

        <h2> Nossos Cursos </h2><br>
        <div class="row">
        <div class="col-sm-12 col-lg-3">
                <img src="imagens/355457307_748609707269244_648644487044530089_n.jpg" alt="paisagem1" width="100%">
                <p> </p>
            </div>

            <div class="col-sm-12 col-lg-3">
                <img src="imagens/355471811_748609620602586_5653571642334232585_n.jpg" alt="paisagem2" width="100%">
            </div>

            <div class="col-sm-12 col-lg-3">
                <img src="imagens/355477200_748609557269259_5857643482987630502_n.jpg" alt="paisagem3" width="100%">
            </div>

            <div class="col-sm-12 col-lg-3">
                <img src="imagens/355517020_748609597269255_7434547103506807064_n.jpg" alt="paisagem4" width="100%">
            </div>
        </div>
    </div>


    <div class="container-fluid bg-success p-5 text-white" id="">

        <h2> Últimas notícias</h2><br>
        <div class="row text-dark">
            <div class="col-sm-12 col-lg-3">
                <div class="card" style="">
                    <img src="imagens/estagio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Estágio e Empregos</h5>
                        <p class="card-text"> Os cursos EAD não tem estágio supervisionado</p>
                        <a href="#" class="btn btn-primary">Ler Matéria</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3">
                <div class="card" style="">
                    <img src="imagens/logomarca_gdf.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Inscrições</h5>
                        <p class="card-text">Inscrições para os Cursos da ETP de Planaltina Acompanhe no site da SEED</p>
                        <a href="#" class="btn btn-primary">Ler Matéria</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3">
                <div class="card" style="">
                    <img src="imagens/aviso.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Avisos e Comunicados</h5>
                        <p class="card-text"> Fique Ligado</p>
                        <a href="#" class="btn btn-primary">Ler Matéria</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3">
                <div class="card" style="">
                    <img src="imagens/estagio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Estágio e Empregos</h5>
                        <p class="card-text"> Os cursos EAD não tem estágio supervisionado</p>
                        <a href="#" class="btn btn-primary">Ler Matéria</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <section id="portfolio">
        <h2> GALERIA DE FOTOS </h2>
        <img src="imagens/68806541_113056976714436_4380351245844480000_n.jpg" alt="informatica">
        <img src="imagens/83531540_178864740133659_6326698800823926784_n.jpg" alt="informatica">
        <img src="imagens/CEP-Saude-Avenida-Independencia-Setor-Tradicional-Planaltina-DF-Comercio-Brasilia-5.jpg" alt="informatica">
        <img src="imagens/68634187_118583612828439_978642671016869888_n.jpg" alt="informatica">
        <img src="imagens/CEP-Saude-Avenida-Independencia-Setor-Tradicional-Planaltina-DF-Comercio-Brasilia-5.jpg" alt="informatica">
        <img src="imagens/68806541_113056976714436_4380351245844480000_n.jpg" alt="informatica">
    </section>

    <section id="video">
        <h2>  </h2>
      <iframe src="video2.mp4" width="100%"  height="600px"></iframe>
    </section>

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