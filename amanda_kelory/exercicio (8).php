<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vtam = $_POST["tamanho"];

    if ($vtam >= 6 && $vtam <= 12) {
        $vcaracter = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $vsenha = "";

        for ($i = 0; $i < $vtam; $i++) {
            $vsenha .= $vcaracter[rand(0, strlen($vcaracter) - 1)];
        }
    } else {
        $vsenha = "Escolha um número entre 6 e 12.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha</title>
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
    <h1>Gerador de Senha</h1>

    <form method="POST">
        <label for="tamanho">Escolha o tamanho da senha (6-12):</label>
        <input type="number" name="tamanho" id="tamanho" min="6" max="12" required>
        <button type="submit">Gerar Senha</button>
    </form>
    <?php if (isset($vsenha))
        echo "<p>Senha gerada: <strong>$vsenha</strong></p>"; ?>
</body>

</html>