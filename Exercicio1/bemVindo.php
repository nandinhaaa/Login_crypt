<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="geral">
        <section id="conteudo">
            <?php
            // Inicializa variáveis
            $username = '';
            $dataDeAtivacao = '';

            // Verifica se os dados do formulário foram enviados
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtém dados do formulário
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

                // Validação básica de dados (opcional)
                if (empty($username) || empty($password)) {
                    echo "<p>Preencha todos os campos!</p>";
                    exit;
                }

                // Simula consulta em banco de dados (substitua por sua consulta real)
                $consultaUsuario = array(
                    "Nanda" => password_hash("123", PASSWORD_DEFAULT), // Senha criptografada
                    "Amanda" => password_hash("123", PASSWORD_DEFAULT) // Senha criptografada
                );

                // Verifica se usuário e senha existem e correspondem
                if (array_key_exists($username, $consultaUsuario) && password_verify($password, $consultaUsuario[$username])) {
                    // Usuário autenticado
                    $dataDeAtivacao = date("d/m/Y", strtotime("+1 week")); // Data de ativação em uma semana

                    // Exibe mensagem de boas-vindas personalizada
                    echo "<p>Bem-vinda(o), $username! :) <br> </p><br>";
                    echo "<p>Sua conta será ativada em: $dataDeAtivacao <br></p><br>";
                    echo "<p>Senha criptografada: " . $consultaUsuario[$username] . "</p>"; // Exibe a senha criptografada

                
                } else {
                    // Erro de autenticação
                    echo "<p>Usuário ou senha inválidos!</p>";
                }
            } else { 
                // Formulário não enviado
                echo "<p>Por favor, preencha o formulário!</p>";
            }


            ?>
            
        </section>
    </div>
</body>

</html>
