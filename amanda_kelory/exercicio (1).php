<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (! is_numeric ($vnum)){
        //echo "O valor digitado nao e numerico";
     }
    $vidade = intval($_POST["idade"]);
    $vmsg = ($vidade >= 18) ? "Que pena, você é maior de idade. pague seus impostos!" : "Que sorte! você é menor de idade então aproveita!";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação da Idade</title>
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
    <h1>Verificação da Idade </h1>
    <form method="POST">
        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade" required>
        <button type="submit">Verificar</button>
    </form>
    <?php if (isset($vmsg))
        echo "<p>$vmsg</p>"; ?>
</body>

</html>