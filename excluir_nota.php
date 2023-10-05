<?php include_once('conexao.php');


$nota_id = $_GET['id'];
$conexao = conexao();
$sql = "DELETE FROM `notas` WHERE `id` = $nota_id";
$resultado = $conexao->query($sql);
$conexao->close();
if ($resultado) {
    header("Location: lancar_notas.php");
    echo "<script>document.location='lancar_notas.php'</script>";

 } else {
    echo "Nota não encontrada.";
}


?>

