<?php

//Declaro Variables

$min = 0;
$max = 0;
$numero_propuesto = 0;
$jugada = 0;
$intentos = 0;
$rtdo = 0;

$opcion =$_POST['submit'] ?? "Por url";
switch ($opcion){
    case "Empezar":
        $min =0;
        $intentos = $_POST['intentos'];
        $intentos = 2** $intentos; //2 elevado al numero de intentos (2 elevado a 10, a 15 y a 20 intentos).
        $numero_propuesto=($min+$max)/2;
        $jugada =1;
        break;
    case "Jugar":
        $min=$_POST['min'];
        $max=$_POST['max'];
        $intentos = $_POST['intentos']
        $jugada= $_POST['jugada']
        $numero_propuesto = $_POST['numero_propuesto']
            //leer rtdo
        $rtdo = $_POST['rtdo'];

        //actualizar min o max en función del resultado
    switch ($rtdo){
        case ">":
            $min = $numero_propuesto;
            break;
            case"<"
            $max = $numero_propuesto;
            break;
        case "=":
            break;

    }
        
    case "Volver":
        break;
    case "Reiniciar":
        break;
    default: //por que lo he escrito en la url
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <meta name="viewport"
    <title>Adivina n&uacutemero</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
<body>


<fieldset style="width: 50%;float:left;margin-left: 20%; background: bisque">
    <legend><h1>Juego adivina n&uacutemero</h1></legend>
    <h2> Selecciona un intervalo del men&uacute de abajo</h2>
    <fieldset>
        <legend>Esteblece interfalo</legend>
        <form action="jugar.php" method="POST">
            <input type="radio" name="intentos" value=10 checked> 1-1.024(2<sup>10</sup>). 10 intentos<br/>
            <input type="radio" name="intentos" value=15> 1-32.268(2<sup>15</sup>). 15 intentos<br/>
            <input type="radio" name="intentos" value=20> 1-1.048.536(2<sup>20</sup>). 20 intentos<br/>
            <input type="submit" value="Empezar" name="submit">
            <input type="hidden" name="min" value ="<?=$min?>"  >
            <input type="hidden" name="max" value ="<?=$max?>"  >
            <input type="hidden" name="jugada" value ="<?=$jugada?>"  >
            <input type="hidden" name="intentos" value ="<?=$intentos?>"  >
            <input type="hidden" name="numero_propuesto" value ="<?=$numero_propuesto?>"  >
        </form>
    </fieldset>
    <br/>
    <h2> Piensa un n&uacutemero de ese intervalo</h2>
    <h2> La aplicaci&oacuten lo acertar&aacute en el n&uacutemero de intentos establecidos seg&uacuten el intervalo</h2>
    <hr/>

    <h2> Cada vez que la aplicaci&oacuten te especifique un n&uacutemero deber&aacutes de indicar</h2>
    <ul>
        <ol>Si el n&uacutemero buscado es mayor</ol>
        <ol>Si el n&uacutemero buscado es menor</ol>
        <ol>Si has aceertado el n&uacutemero</ol>
    </ul>


</fieldset>
</body>
</html>
