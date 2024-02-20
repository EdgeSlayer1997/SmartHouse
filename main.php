<?php
$serv = "localhost";
$user = "Gomita";
$pass = "Paulina123";
$db = "ProyectoFinall";
$conn = mysqli_connect($serv, $user, $pass, $db);

$livingRoomLED = $_POST['livingRoomLED'];
$livingRoomFan = $_POST['livingRoomFan'];

<script> alert("HERE") </script>

if ($livingRoomLED == 0)
{
    $query = "INSERT INTO led1 (Valor, Fecha) VALUES (0, now())";
      echo $query;
    $resultado = mysqli_query($conn,$query);
    
    /*$Consulta = "SELECT Valor, MAX(ID) from ledcito";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array(mysqli_num_rows($resultadoLRLED));
    $LRLED = $valorLRLED[0];*/
    
	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
}

if ($livingRoomLED == 1)
{   
    echo ("Ingreso a 1");
    $query = "INSERT INTO led1 (Valor, Fecha) VALUES (1, now())";
    $resultado = mysqli_query($conn,$query);
    
    /*$Consulta = "SELECT Valor, MAX(ID) from ledcito";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array(mysqli_num_rows($resultadoLRLED));
    $LRLED = $valorLRLED[0];*/

	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
}

if ($livingRoomFan == 2)
{
    $query = "INSERT INTO ventiladorsala (Valor, Fecha) VALUES (0, now())";
    echo $query;
    $resultado = mysqli_query($conn,$query);
    
    /*$Consulta = "SELECT Valor, MAX(ID) from ledcito";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array(mysqli_num_rows($resultadoLRLED));
    $LRLED = $valorLRLED[0];*/
    
	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
}

if ($livingRoomFan == 3)
{   
    echo ("Ingreso a 1");
    $query = "INSERT INTO ventiladorsala (Valor, Fecha) VALUES (1, now())";
    $resultado = mysqli_query($conn,$query);
    
    /*$Consulta = "SELECT Valor, MAX(ID) from ledcito";
	$resultadoLRLED = mysqli_query($conn,$Consulta);
	$valorLRLED = $resultadoLRLED->fetch_array(mysqli_num_rows($resultadoLRLED));
    $LRLED = $valorLRLED[0];*/

	shell_exec("sudo python /var/www/html/Progreso/main.py ".$LRLED);
}
?>



