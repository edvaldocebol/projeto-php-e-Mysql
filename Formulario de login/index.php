<?php
    include('conecxao.php');

    if(isset($_POST['email'])  ||  isset($_POST['senha'])) {

        if(strlen($_POST['email']) ==0) {
            echo "Preencha seu Email";
        } else if(strlen($_POST['senha']) ==0) {
            echo "Preencha sua senha";
        }else {

            $email  =  $mysqli->real_escape_string($_POST['email']);
            $senha =  $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE  email = '$email' AND senha = '$senha' ";
            $sql_query = $mysqli->query($sql_code) or die("Falha na conexão do SQL : " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: home.php");

            }else {
                echo "Falha ao logar ! E-mail ou senha incorretos";
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <center>
        <h1>Siga</h1>
        <form action="" method="POST">
            <div class="geral">
                <div class="email">
                    <label>Email</label>
                    <input type="email" name="email" class="email">
                </div>

                <div class="senha">
                    <label>Senha</label>
                    <input type="password" name="senha">
                </div>

                <div class="button">
                    <button type="submit">Entrar</button>
                </div>
            </div>
        </form>
    </center>

    <style>
        input {
            padding: 3px; 
        }

        label {
            display: flex;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .button {
            padding: 5px;
        }

        button {
            padding: 5px;
            width: 100px;
        }

        .geral {
            border:  1px solid ;
            width: 300px;
            height: 140px;
            padding: 6px;
            border-radius: 5%;
            background-color: rgb(150, 73, 223);
        }
    </style>
</body>

</html>