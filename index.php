<?php
$intentos = $_GET
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juego Adivina Número</title>

</head>
<body>
<h1>ADIVINA UN NUMERO</h1>
<fieldset>
    <legend>ELIGE INTERVALO</legend>
    <form action="jugar.php" method="POST">
        <input type="radio" name="intentos" <?= $checked_10 ?> value="10" id="">10 intentos valores entre(1-1024)<br/>
        <input type="radio" name="intentos" <?= $checked_16 ?> value="16" id="">16 intentos valores entre(1-65536)<br/>
        <input type="radio" name="intentos" <?= $checked_20 ?> value="20" id="">20 intentos valores
        entre(1-1048576)<br/>
        <input type="submit" value="Empezar" name="submit">
</fieldset>
</body>
</html>
