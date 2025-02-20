<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vuser = htmlspecialchars($_POST["usuario"]);
    $vpass = $_POST["senha"];
    $user_correto = "admin";
    $vpass_correta = "1234";
    $vmsg = ($vuser == $user_correto && $vpass == $vpass_correta) ? "Login bem-sucedido!" : "Usuário ou senha incorretos.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input,
        button {
            display: block;
            width: 100%;
            margin-top: 10px;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Login</h1>

    <form method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($vmsg))
        echo "<p>$vmsg</p>"; ?>
</body>

</html>