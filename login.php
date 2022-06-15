<?php
    session_start();
    include "db_connect.php";
    if(isset($_POST['user']) && isset($_POST['senha'])) {
        // code...

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
        $_user = validate($_POST['user']);
        $_senha = validate($_POST['senha']);

        if(empty($_user)) {
            header("Location: user.php?erro=Usuario campo obrigatorio.");
            exit();
        }else if(empty($_senha)) {
            header("Location: user.php?erro=Senha campo obrigatorio.");
            exit();
        }else {
            $sql = "SELECT * FROM users WHERE usuario= '$uname' AND senha='senha'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1 ) {
                //
               $row = mysqli_fetch_assoc($result);
                
               if($row['usuario'] === $uname && $row['senha'] === $senha) {
                    $_SESSION['usuario'] = $row['usuario'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    exit();
               }else {
                    header("Location: user.php?erro=Usuário ou Senha Erradas.");
                    exit();
                }
              
            }else {
                header("Location: user.php?erro=Usuário ou Senha Erradas.");
                exit();
            }
        }

    }else {
        header('Location: user.php');
        exit();
    }

?>