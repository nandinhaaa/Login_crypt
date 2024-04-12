<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Controle de Finanças</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="tformulario">
        <h1>Logar no Sistema</h1>
        <form action="bemVindo.php" method="post">
            <img id="imagem" src="login.jpg">
            <label>Nome do usuário:</label>
            <input type="text" required="required" name="username" size="30">
            <label>Senha:</label>
            <input type="password" required="required" name="password" maxlength="8" size="30">
            <br>
            <input class="botao" type="submit" value="Acessar" class="botao" />
            <input class="botao" type="reset" value="Limpar" class="botao" />
        </form>
    </div>
</body>

</html>
