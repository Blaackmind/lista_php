<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vnomes = array_map('trim', explode(',', $_POST["nomes"]));
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nomes</title>
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

        ol {
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Lista de Nomes</h1>
    <form method="POST">
        <label for="nomes">Digite nomes separados por vírgula:</label>
        <input type="text" name="nomes" id="nomes" required>
        <button type="submit">Exibir Lista</button>
    </form>
    <?php
    if (isset($vnomes)) {
        echo "<h3>Lista de Nomes</h3>";
        echo "<ol>";
        foreach ($vnomes as $vnomes) {
            echo "<li>" . htmlspecialchars($vnomes) . "</li>";
        }
        echo "</ol>";
    }
    ?>
</body>

</html>