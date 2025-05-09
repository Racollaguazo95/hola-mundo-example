<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo con PHP</title>
</head>
<body>
    <h1>HOLA MUNDO</h1>

    <form method="post" action="">
        <input type="text" name="num1" placeholder="num 1" required>
        <input type="text" name="num2" placeholder="num 2" required>
        <button type="submit">Haz clic aquí</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = floatval($_POST["num1"]);
            $num2 = floatval($_POST["num2"]);
            $resultado = $num1 + $num2;
            echo "<h3>Resultado: $resultado</h3>";
        }
    ?>
</body>
</html>
