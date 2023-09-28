<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto</title>
</head>
<body>
    <style>
        body{
            background-color: pink;
        }
    </style>
   <center><h1>Operador Lógicos</h1></center>
    <center><h2>Seja bem vindo(a)!<h2></center>
    <form method="post" action="">
        <label for="idade">Digite sua idade: </label>
        <input type="number" name="idade" id="idade">
        <input type="submit" value="Verificar sua idade">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST["idade"];
        
        if ($idade < 16) {
            echo "Não pode votar.";
        } elseif ($idade >= 16 && $idade < 18) {
            echo "Voto facultativo.";
        } elseif ($idade >= 18 && $idade <= 65) {
            echo "O voto é obrigatório.";
        } else {
            echo "O voto é facultativo.";
        }
    }
    ?>
</body>
</html>