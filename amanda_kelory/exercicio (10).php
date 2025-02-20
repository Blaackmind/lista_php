<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vcpf = trim($_POST["cpf"]);
    $vvalidar = (strlen($vcpf) == 11 && ctype_digit($vcpf));
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de CPF</title>
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
    <h1>Validação de CPF</h1>

    <form method="POST">
        <label for="cpf">Digite seu CPF (somente números):</label>
        <input type="text" name="cpf" id="cpf" pattern="\d{11}" required>
        <button type="submit">Validar</button>
    </form>
    <?php if (isset($vvalidar))
        echo $vvalidar ? "<p>CPF válido.</p>" : "<p>CPF inválido.</p>"; ?>
</body>

</html>