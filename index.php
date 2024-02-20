<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Paulina♥</title>
</head>
<body>
  

    <div class="inicio">
        <img src="imgs/logo.png"><br><br><br>
        <button id="open">Entrar</button>
       
    </div>
    
    <div class="sala">
        <h1 id="titulo">SALA</h1> <br>
        <button id="op">Entrar</button>
    </div>
    
    <div class="cuarto">
        <h1 id="titulo2">HABITACIÓN</h1> <br>
        <button id="op">Entrar</button>
    </div>
    
     <div class="baño">
        <h1 id="titulo3">BAÑO</h1> <br>
        <button id="op">Entrar</button>
    </div>
    
     <div class="cochera">
        <h1 id="titulo4">COCHERA</h1> <br>
        <button id="op">Entrar</button>
    </div>
    
     <div class="pasillo">
        <h1 id="titulo5">PASILLO</h1> <br>
        <button id="op">Entrar</button>
    </div>
    
    
     <div class="cocina">
        <h1 id="titulo6">COCINA</h1> <br>
        <button id="op">Entrar</button>
    </div>
    
     <div class="Jardin">
        <h1 id="titulo3">JARDIN</h1> <br>
        <button id="op">Entrar</button>
    </div>  
  </div>  
    
         <div id="livingRoomLED">
            <button id="LED_ON">Encender LED</button>
            <button id="LED_OFF">Apagar LED</button>
            <button id="livingRoomFan_ON">Encender Ventilador</button><br><br>
            <button id="livingRoomFan_OFF">Apagar Ventilador</button>
            <button id="back1">Regresar</button>
        </div>
        
          <div id="Room">
            <button id="RoomLed">Encender LED</button>
            <button id="RoomLed_OFF">Apagar LED</button>
            <button id="RoomFan">Encender Ventilador</button>
            <button id="RoomFan_OFF">Apagar Ventilador</button>
             <button id="back2">Regresar</button>
        </div>
        
        <div id="RestRoom">
            <button id="RestRoomLed">Encender LED</button>
            <button id="RestRoomLed_OFF">Apagar LED</button>
             <button id="back3">Regresar</button>
        </div>
        
        <div id="Hallway">
            <button id="HallwayLed">Encender LED</button>
            <button id="HallwayLed_OFF">Apagar LED</button>
             <button id="back4">Regresar</button>
        </div>
        
            <div id="Garage">
            <button id="GarageLed_ON">Encender LED</button>
            <button id="GarageLed_OFF">Apagar LED</button>
            <button id="GarageDoor">Abrir Puerta</button>
            <button id="GarageDoor_OFF">Cerrar puerta</button>
             <button id="back5">Regresar</button>
        </div>
        
         <div id="Kitchen">
            <button id="KitchenLed">Encender LED</button>
            <button id="KitchenLed_OFF">Apagar LED</button>
             <button id="back6">Regresar</button>
        </div>
        
        <div id="Garden">
            <button id="GardenLed">Encender LED</button>
            <button id="GardenLed_OFF">Apagar LED</button>
             <button id="back7">Regresar</button>
        </div>
<?php
$serv = "localhost";
$user = "Gomita";
$pass = "Paulina123";
$db = "ProyectoFinall";
$conn = mysqli_connect($serv, $user, $pass, $db);
?>

<?php
if (!$conn)
{
    echo("Conexión fallida error: ". mysqli_connect_errno());
    die;
}
else
{
    echo("Conexión exitosa");
}
?>
    

 <script src="jquery-1.9.1.js"></script>
 <script>
 var livingRoomLED = '';
 var livingRoomFan = '';
 var roomled = '';
 var roomFan = '';
 var restRoomLed = '';
 var garageLed;
 var garageDoor = '';
 var hallwayLed = '';
 var kitchenLed = '';
 var gardenLed;

$(function(){
    $("#LED_ON").click(function(){
        livingRoomLED = '1';
        console.log(livingRoomLED);
        $.ajax({
        data:{livingRoomLED},
        url:'livingRoomLED.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});

$(function(){
    $("#LED_OFF").click(function(){
        livingRoomLED = '0';
        console.log(livingRoomLED);
        $.ajax({
        data:{livingRoomLED},
        url:'livingRoomLED.php',
        type:'POST',
        success: function(result){

        }
    });
    });
});

  $(function(){
    $("#livingRoomFan_ON").click(function(){
        livingRoomFan = '1';
        console.log(livingRoomFan);
        $.ajax({
        data:{livingRoomFan},
        url:'livingRoomFan.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});

$(function(){
    $("#livingRoomFan_OFF").click(function(){
        livingRoomFan = '0';
        console.log(livingRoomFan);
        $.ajax({
        url:'livingRoomFan.php',
        type:'POST',
        data:{livingRoomFan},
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#RoomLed").click(function(){
        roomled = '1';
        console.log(roomled);
        $.ajax({
        url:'RoomLed.php',
        type:'POST',
        data:{roomled},
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#RoomLed_OFF").click(function(){
        roomled = '0';
        console.log(roomled);
        $.ajax({
        data:{roomled},
        url:'RoomLed.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});

$(function(){
    $("#RoomFan").click(function(){
        roomFan = '1';
        console.log(roomFan);
        $.ajax({
        url:'roomFan.php',
        type:'POST',
        data:{roomFan},
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#RoomFan_OFF").click(function(){
        roomFan = '0';
        console.log(roomFan);
        $.ajax({
        data:{roomFan},
        url:'roomFan.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});

$(function(){
    $("#GarageLed_ON").click(function(){
        garageLed = 1;
        console.log(garageLed);
        $.ajax({
        data:{garageLed},
        url:'garageLed.php',
        type:'POST',
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#GarageLed_OFF").click(function(){
        garageLed= 0;
        console.log(garageLed);
        $.ajax({
        data:{garageLed},
        url:'garageLed.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});


$(function(){
    $("#GarageDoor").click(function(){
        garageDoor = '1';
        console.log(garageDoor);
        $.ajax({
        data:{garageDoor},
        url:'garageDoor.php',
        type:'POST',
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#GarageDoor_OFF").click(function(){
        garageDoor= '0';
        console.log(garageDoor);
        $.ajax({
        data:{garageDoor},
        url:'garageDoor.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});

$(function(){
    $("#HallwayLed").click(function(){
        hallwayLed = '1';
        console.log(hallwayLed);
        $.ajax({
        data:{hallwayLed},
        url:'hallwayLed.php',
        type:'POST',
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#HallwayLed_OFF").click(function(){
        hallwayLed= '0';
        console.log(hallwayLed);
        $.ajax({
        data:{hallwayLed},
        url:'hallwayLed.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});

$(function(){
    $("#KitchenLed").click(function(){
        kitchenLed = '1';
        console.log(kitchenLed);
        $.ajax({
        data:{kitchenLed},
        url:'kitchenLed.php',
        type:'POST',
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#KitchenLed_OFF").click(function(){
        kitchenLed = '0';
        console.log(kitchenLed);
        $.ajax({
        data:{kitchenLed},
        url:'kitchenLed.php',
        type:'POST',
        success: function(result){
        }
    });
    });
});

$(function(){
    $("#GardenLed").click(function(){
        gardenLed = 1;
        console.log(gardenLed);
        $.ajax({
        data:{gardenLed},
        url:'gardenLed.php',
        type:'POST',
        success: function(result){

        }
    });
    });
});

$(function(){
    $("#GardenLed_OFF").click(function(){
        gardenLed = 0;
        console.log(gardenLed);
        $.ajax({
        data:{gardenLed},
        url:'gardenLed.php',
        type:'POST',
        success: function(result){

        }
    });
    });
});
 </script>
 <script src="main.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
