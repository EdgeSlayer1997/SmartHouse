<?php
$serv = "localhost";
$user = "Gomita";
$pass = "Paulina123";
$db = "ProyectoFinall";
$conn = mysqli_connect($serv, $user, $pass, $db);
$roomFan = $_POST['roomFan'];


if ($roomFan== '0')
{
    $query = "INSERT INTO ventiladorcuarto (Valor, Fecha) VALUES (0, now())";
    $resultado = mysqli_query($conn,$query);
    echo ($query);
    $Consulta = "SELECT Valor, MAX(ID) from ventiladorsala";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
    $LRLED = 0;
	$RoomFan_ON
	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
	shell_exec("sudo python /var/www/html/Progreso/RoomFan.py ".$RoomFan_ON);
}

if ($roomFan== '1')
{   
    $query = "INSERT INTO ventiladorcuarto (Valor, Fecha) VALUES (1, now())";
    echo ($query);
    $resultado = mysqli_query($conn,$query);
    
    $Consulta = "SELECT Valor, MAX(ID) from ventiladorsala";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
    $LRLED = 1;
	$RoomFan_OFF
	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
	shell_exec("sudo python /var/www/html/Progreso/RoomFan.py ".$RoomFan_OFF);
}

?>
