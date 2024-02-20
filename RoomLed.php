<?php
$serv = "localhost";
$user = "Gomita";
$pass = "Paulina123";
$db = "ProyectoFinall";
$conn = mysqli_connect($serv, $user, $pass, $db);
$roomled= $_POST['roomled'];


if ($roomled== '0')
{
    $query = "INSERT INTO led2 (Valor, Fecha) VALUES (0, now())";
    $resultado = mysqli_query($conn,$query);
    echo ($query);
    $Consulta = "SELECT Valor, MAX(ID) from ventiladorsala";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
    $LRLED = 0;
    
	shell_exec("sudo python /var/www/html/Progreso/Room_OFF.py ");
}

if ($roomled== '1')
{   
    $query = "INSERT INTO led2 (Valor, Fecha) VALUES (1, now())";
    echo ($query);
    $resultado = mysqli_query($conn,$query);
    
    $Consulta = "SELECT Valor, MAX(ID) from ventiladorsala";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
    $LRLED = 1;
    
	shell_exec("sudo python /var/www/html/Progreso/Room.py");
}

?>
