
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
.box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-image: linear-gradient(80deg, #4186ee, #18b39e);
    color: white;
    font-size: 20px;
    text-shadow: 0.1em 0.1em #333;

}

legend {
    color: white !important;
    text-shadow: 0 0 0.2em rgb(247, 13, 235), 0 0 0.2em #87F,
        0 0 0.2em #87F;
}

@media (max-width:769px) and (min-width:320px) {
    .box {
        width: 90%;
    }
}
</style>

<body>
    <div class="box">
        <form action="testeLogin.php" method="POST">
            <fieldset>
                <legend class="title">Formulario de login</legend>

                <div class="field">
                    <label for="Email">Email</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="e.g. alex@example.com" name="email" required>
                    </div>
                </div>

                <div class="field">
                    <label for="Password">Password</label>
                    <div class="control">
                        <input class="input" type="password" placeholder="********" name="senha" required>
                    </div>
                </div>
                <br>
                <input type="submit" class="button is-primary has-text-black" name="emviar">
                <a href="home.php" class="button is-danger is-outlined">Sair</button></a>
            </fieldset>
        </form>
    </div>
</body>

</html>