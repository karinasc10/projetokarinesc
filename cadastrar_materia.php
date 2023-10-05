<?php include_once('conexao.php'); ?>

<?php



if (isset($_POST['criar_materia'])) {

    $conexao = conexao();

    $nome =    $_POST['nome'] ? $_POST['nome']  : null;
    $descricao =    $_POST['descricao'] ? $_POST['descricao'] : null;
    $conteudo =    $_POST['conteudo'] ? $_POST['conteudo'] : null;
    $ordem =     $_POST["ordem"] ?  $_POST["ordem"] : null;





    // Evite SQL Injection
    //$descricao = $conexao->real_escape_string($descricao);
   // $conteudo = $conexao->real_escape_string($conteudo);

    // Consulta SQL para inserir a nota
    $sql = "INSERT INTO `materias` (`nome`, `descricao`, `conteudo`, `ordem`)
         VALUES ('$nome', '$descricao', '$conteudo', '$ordem')";


    if ($conexao->query($sql) === TRUE) {
        // Nota lançada com sucesso
     //   header("Location: cadastrar_materia.php");
    } else {
        echo "Erro ao lançar a materia: " . $conexao->error;
    }

    $conexao->close();


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
            <div class="col-lg-4">
                <?php include_once('menu_lateral_aluno.php') ?>
            </div>
            <div class="col-lg-8">
                <div class="row ">
                    <div class="col-lg-10 text-center pt-5 mt-5">
                        <div class="center-logo">
                            <img class="img-fluid rounded " src="imagens/logo_escola.jpg" width="120px">
                        </div>
                        <h2 class="mb-4 text-center center-logo">Criar materias</h2>
                        <form method="post" action="cadastrar_materia.php" class="">                                       
                            <div class="form-group">
                                <label for="nota">Nome:</label>
                                <input type="text" class="form-control" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="nota">descrição:</label>
                                <input type="text" class="form-control" name="descricao">
                            </div>
                            <div class="form-group">
                                <label for="nota">Orderm do menu:</label>
                                <input type="number" class="form-control" name="ordem" >
                            </div>
                            <div class="form-group">
                                <label for="observacoes">Conteudo:</label>
                                <textarea class="form-control" name="conteudo" id="editor" rows="20" cols="50" style="height: 800px;" ></textarea>
      <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                const editor = document.querySelector('#editor');

editor.style.height = '800px';
editor.style.width = '100%';
                </script>
                          
                            </div>
                            <input type="hidden" class="form-control" name="criar_materia" value="true">

                            <button type="submit" class="btn btn-primary m-5">Criar máteria</button>
                        </form>

                    </div>
                    <div class="col-lg-10 text-center pt-5 mt-5">           
                                        <h2 class="mb-4">Lista de Materias</h2>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>descricao</th>
                                                    <th>ordem</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Consulta SQL para obter todas as notas lançadas
                                                $conexao = conexao();
                                                $sql = "SELECT * FROM `materias`";
                                                // Executar a consulta SQL
                                                $resultado = $conexao->query($sql);

                                                // Verificar se a consulta teve sucesso
                                                if ($resultado === false) {
                                                    echo "Erro na consulta SQL: " . $conexao->error;
                                                } else {
                                                    // Verificar se há resultados antes de iterar
                                                    if ($resultado->num_rows > 0) {
                                                        while ($row = $resultado->fetch_assoc()) {
                                                            echo "<tr>";
                                                            echo "<td>" . $row["nome"] . "</td>";
                                                            echo "<td>" . $row["descricao"] . "</td>";
                                                            echo "<td>" . $row["ordem"] . "</td>";
                                                            echo "<td>";
                                                            echo "<a href='editar_materia.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a>";
                                                            echo "<a href='excluir_materia.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm ml-2'>Excluir</a>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                        }
                                                    } else {
                                                        echo "Nenhuma nota encontrada.";
                                                    }
                                                }
                                                $conexao->close();
                                                ?>
                                            </tbody>
                                        </table>
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