
<?php if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    echo "<script>document.location='login.php'</script>";
}

?>



<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="">
    <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Máterias</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column  text-left">
        <!-- Adicionando as matérias do curso técnico de informática -->

        <?php      // Conexão com o banco de dados (substitua com suas configurações)

        $conexao = conexao();
        // Consulta SQL para selecionar todos os alunos com perfil 'aluno'
        $sql = "SELECT * FROM `materias`";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo ' <li class=" border text-left "> <a href="abrir_materia.php?id='.$row['id'].'" class="nav-link link-dark text-left">  ' . $row['nome'] . ' </a>  </li>';
            }
        }
        $conexao->close();
        ?>
        <hr>
        <li class=" border">
            <?php if ($_SESSION["perfil"] == 'aluno') { ?>
                <a class="dropdown-item" href="minhas_notas.php"> Minhas Notas</a> <?php } else { ?>
                <a class="dropdown-item" href="lancar_notas.php">Lançar Notas</a>
                <a class="dropdown-item" href="cadastrar_materia.php">Materias(Cadastrar/Editar/Excluir)</a>

            <?php } ?>
        </li>
      
        <li class=" border">
            <a class="dropdown-item" href="index.php?sair=true">Sair</a>
        </li>

    </ul>
    <ul class="nav nav-pills flex-column  text-left mt-5">

    <li class=" border">
           <h2>Chat</h2>
        <iframe src="bate-papo/users.php" width="100%" height="600px">

        </iframe>
                </li>

                </ul>
</div>