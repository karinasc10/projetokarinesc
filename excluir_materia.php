<?php include_once('conexao.php');


$materia_id = $_GET['id'];
$conexao = conexao();
$sql = "DELETE FROM `materias` WHERE `id` = $materia_id";
$resultado = $conexao->query($sql);
$conexao->close();
if ($resultado) {
    header("Location: cadastrar_materia.php");
    echo "<script>document.location='cadastrar_materia.php'</script>";

    
 } else {
    echo "Nota não encontrada.";
}


?>

