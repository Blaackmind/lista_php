<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vnum = ($_POST["numero"]);
    if (! is_numeric ($vnum)){
       //echo "O valor digitado nao e numerico";
    }
    $vnum = intval($_POST["numero"]);
    $vmsg = ($vnum % 2 == 0) ? "O número $vnum é par." : "O número $vnum é ímpar.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste par ou impar</title>
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

    <body>
        <h1>Teste par ou impar</h1>
        <form method="POST">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" id="numero" required>
            <button type="submit">Verificar</button>
        </form>
        <?php if (isset($vmsg))
            echo "<p>$vmsg</p>"; ?>
    </body>
</body>

</html>