<?php include_once('conexao.php');

// Verifique se o aluno está autenticado (você pode adicionar mais verificações de segurança, se necessário)
if (!isset($_SESSION["usuario_id"])) {

   }elseif($_SESSION["perfil"] == "aluno"){
    header("Location: minhas_notas.php");
    echo "<script>document.location='minhas_notas.php'</script>";




   }elseif( $_SESSION["perfil"] == "professor"){
    header("Location: lancar_notas.php");
    echo "<script>document.location='lancar_notas.php'</script>";



   }


$alerta = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

     $conexao = conexao();
    // Evite SQL Injection
    $email = $conexao->real_escape_string($email);

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT id, perfil FROM usuarios WHERE email = '$email' AND password = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
        $_SESSION["usuario_id"] = $row["id"];
        $_SESSION['usuario_id']  = $_SESSION["usuario_id"]; // usar para chat
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["email"] = $email;
        $_SESSION["ultima_login"] = date("Y-m-d H:i:s");

        // Redirecione para a página apropriada com base no perfil
        if ($row["perfil"] == "aluno") {
            header("Location: minhas_notas.php");
            echo "<script>document.location='minhas_notas.php'</script>";

        } elseif ($row["perfil"] == "professor") {
            header("Location: lancar_notas.php");
            echo "<script>document.location='lancar_notas.php'</script>";

        } elseif ($row["perfil"] == "administrador") {
            header("Location: admin_dashboard.php");
        } else {
            echo "Perfil desconhecido.";
        }
    } else {
        $alerta =  "Credenciais inválidas.";
    }

    $conexao->close();
   // return $conexao;
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
<body>
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-5  text-center pt-5 mt-5">
        <div class="center-logo">
        <img class="img-fluid rounded " src="imagens/logo_escola.jpg" width="120px">
        </div>
        <h2 class="mb-4 text-center center-logo">Tela de Login</h2>
        <?php 
        if($alerta !=  ''){

            echo '<div class="row g-3"><span class="alert alert-danger ">Usuário é/ou senhas inválidos</span></div>';
        }      
        
        
        ?>
        <form class="row g-3" method="post" >
            <div class="col-lg-12 mb-3 ">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class=" col-lg-12 mb-3 col-12">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block w-50">Entrar</button>
        </form>
    </div><br><hr class="m-5">
  <!--  <h4>Perfil Aluno</h4>
    <small>login: aluno@gmail.com e senha: 12345</small><br><br>
    <h4>Perfil Professor</h4>
    <small>login: professor@gmail.com e senha: 12345<small><br><br> -->
</body>
</html>