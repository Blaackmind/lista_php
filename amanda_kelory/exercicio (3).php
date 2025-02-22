<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (! is_numeric ($vnum)){
        //echo "O valor digitado nao e numerico";
     }
    $vnum = intval($_POST["numero"]);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
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

        ul {
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Tabuada</h1>
    <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Gerar Tabuada</button>
    </form>
    <?php
    if (isset($vnum)) {
        echo "<h3>Tabuada do $vnum</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$vnum x $i = " . ($vnum * $i) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>