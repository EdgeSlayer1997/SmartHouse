<?php
$serv = "localhost";
$user = "Gomita";
$pass = "Paulina123";
$db = "ProyectoFinall";
$conn = mysqli_connect($serv, $user, $pass, $db);
$gardenLed= $_POST['gardenLed'];


if ($gardenLed== 0)
{
    $query = "INSERT INTO led7 (Valor, Fecha) VALUES (0, now())";
    $resultado = mysqli_query($conn,$query);
    echo ($query);
    
    $Consulta = "SELECT Valor, MAX(ID) from ventiladorsala";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
    $LRLED = 0;
	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
	shell_exec("sudo python /var/www/html/Progreso/Graden_OFF.py");
}

if ($gardenLed== 1)
{   
    $query = "INSERT INTO led7 (Valor, Fecha) VALUES (1, now())";
    echo ($query);
    $resultado = mysqli_query($conn,$query);
    
    $Consulta = "SELECT Valor, MAX(ID) from ventiladorsala";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
	$LRLED = 1;
	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
	shell_exec("sudo python /var/www/html/Progreso/Garden.py");
}

?>
