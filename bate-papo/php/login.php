<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE usuarios SET status = '{$status}' WHERE id = {$row['id']}");
                if($sql2){
                    $_SESSION['usuario_id'] = $row['usuario_id'];
                    echo "Davys, diz:Tem permissão!";
                }else{
                    echo "Algo deu errado. Por favor, tente novamente!";
                }
            }else{
                echo "email ou senha incorretos!";
            }
        }else{
            echo "$email - email inexitente!";
        }
    }else{
        echo "campos de entrada obrigatórios!";
    }
?>