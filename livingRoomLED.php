<?php
$serv = "localhost";
$user = "Gomita";
$pass = "Paulina123";
$db = "ProyectoFinall";
$conn = mysqli_connect($serv, $user, $pass, $db);
$livingRoomLED = $_POST['livingRoomLED'];


    if ($livingRoomLED == '0')
{
    $query = "INSERT INTO led1 (Valor, Fecha) VALUES (0, now())";
    echo ($query);
    $resultado = mysqli_query($conn,$query);
    
    /*$Consulta = "SELECT Valor, MAX(ID) from ";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
    $LRLED = 0;*/
    $LED_ON = 0;
	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
	shell_exec("sudo python /var/www/html/Progreso/livingRoom_OFF.py ");
}

if ($livingRoomLED == '1')
{   
    $query = "INSERT INTO led1 (Valor, Fecha) VALUES (1, now())";
    $resultado = mysqli_query($conn,$query);
    echo ($query);
    $Consulta = "SELECT Valor, MAX(ID) from led1";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array($resultadoLRLED);
    $LRLED = 1;
    
	shell_exec("sudo python /var/www/html/Progreso/livingRoom.py ");
}
?>
