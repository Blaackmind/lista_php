<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vnum = intval($_POST["numero"]);
    $vsoma = 0;
    for ($i = 1; $i <= $vnum; $i++) {
        $vsoma += $i;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
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
    <h1>Soma de Números </h1>
    <form method="POST">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Calcular Soma</button>
    </form>
    <?php if (isset($vsoma))
        echo "<p>A soma de 1 até $vnum é $vsoma.</p>"; ?>
</body>

</html>