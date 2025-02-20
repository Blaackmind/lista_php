<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vn = $_POST["termos"];
    $va = 0;
    $vb = 1;
    $vseq = "$va, $vb";

    for ($i = 2; $i < $vn; $i++) {
        $vc = $va + $vb;
        $vseq .= ", $vc";
        $va = $vb;
        $vb = $vc;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
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
    <h1>Fibonacci</h1>

    <form method="POST">
        <label for="termos">Número de termos:</label>
        <input type="number" name="termos" id="termos" min="1" required>
        <button type="submit">Gerar Sequência</button>
    </form>
    <?php if (isset($vseq))
        echo "<p>$vseq</p>"; ?>
</body>

</html>