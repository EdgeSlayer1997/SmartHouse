$( "#open" ).click(function() {
  $( ".inicio" ).hide( "slow", function() {
  });
});
 
$("#open").click(function() {
$("#titulo, #op, #titulo2, #en, .baño, #titulo3, .cochera, #titulo4, .cocina, #titulo6, #titulo5").show("slow");
});

//sala

$("#op").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").hide("slow", function(){
	});
});

$("#op").click(function(){
$("#LED_ON, #back1,#LED_OFF, #livingRoomFan_ON, #livingRoomFan_OFF").show("slow", function(){
});
});

//cuarto
$(".cuarto").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").hide("slow", function(){
	});
});

$(".cuarto").click(function(){
$("#RoomLed, #back2,#RoomLed_OFF , #RoomFan, #RoomFan_OFF").show("slow", function(){
});
});

//baño

$(".baño").click(function(){
	$(".sala,  .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").hide("slow", function(){
	});
});

$(".baño").click(function(){
$("#RestRoomLed,#back3, #RestRoomLed_OFF").show("slow", function(){
});
});


//pasillo
$(".pasillo").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").hide("slow", function(){
	});
});

$(".pasillo").click(function(){
$("#HallwayLed,#back4, #HallwayLed_OFF, #HallwayDoor, #HallwayDoor_OFF").show("slow", function(){
});
});

//cochera
$(".cochera").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").hide("slow", function(){
	});
});

$(".cochera").click(function(){
$("#GarageLed_ON,#back5, #GardenLed_OFF, #GarageDoor, #GarageDoor_OFF").show("slow", function(){
});
});

//cocina
$(".cocina").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").hide("slow", function(){
	});
});

$(".cocina").click(function(){
$("#KitchenLed,#back6, #KitchenLed_OFF").show("slow", function(){
});
});

//Jardin
$(".Jardin").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").hide("slow", function(){
	});
});

$(".Jardin").click(function(){
$("#GardenLed, #back7,#GardenLed_OFF").show("slow", function(){
});
});

//back1
$("#back1").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").show("slow", function(){
	});
});

$("#back1").click(function(){
$("#LED_ON, #back1,#LED_OFF, #livingRoomFan_ON, #livingRoomFan_OFF").hide("slow", function(){
});
});

//back2
$("#back2").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").show("slow", function(){
	});
});

$("#back2").click(function(){
$("#RoomLed, #back2,#RoomLed_OFF , #RoomFan, #RoomFan_OFF").hide("slow", function(){
});
});

//back3
$("#back3").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").show("slow", function(){
	});
});

$("#back3").click(function(){
$("#RestRoomLed,#back3, #RestRoomLed_OFF").hide("slow", function(){
});
});

//back4
$("#back4").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").show("slow", function(){
	});
});

$("#back4").click(function(){
$("#HallwayLed,#back4, #HallwayLed_OFF, #HallwayDoor, #HallwayDoor_OFF").hide("slow", function(){
});
});

//back5
$("#back5").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").show("slow", function(){
	});
});

$("#back5").click(function(){
$("#GarageLed_ON, #back5 ,#GarageLed_OFF, #GarageDoor, #GarageDoor_OFF").hide("slow", function(){
});
});

//back6
$("#back6").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").show("slow", function(){
	});
});

$("#back6").click(function(){
$("#KitchenLed,#back6, #KitchenLed_OFF").hide("slow", function(){
});
});

//back7
$("#back7").click(function(){
	$(".sala, .cuarto, .baño, .pasillo, .Jardin, .cocina, .cochera").show("slow", function(){
	});
});

$("#back7").click(function(){
$("#GardenLed, #back7,#GardenLed_OFF").hide("slow", function(){
});
});
