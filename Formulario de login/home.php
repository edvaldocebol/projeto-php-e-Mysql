<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    Bem vindo ao painel , <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="sair.php"><button>sair</button></a>
    </p>
</body>
</html>