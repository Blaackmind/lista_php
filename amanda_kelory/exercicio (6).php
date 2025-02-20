<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vpalavra = strtolower(trim($_POST["palavra"]));
    preg_match_all('/[aeiou]/', $vpalavra, $matches);
    $vquant_vogal = count($matches[0]);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
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
    <h1>Contador de Vogais </h1>
    <form method="POST">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" name="palavra" id="palavra" required>
        <button type="submit">Contar Vogais</button>
    </form>
    <?php if (isset($vquant_vogal))
        echo "<p>A palavra '$vpalavra' contém $vquant_vogal vogais.</p>"; ?>
</body>

</html>