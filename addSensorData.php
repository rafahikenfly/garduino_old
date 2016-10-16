<?php

   	include("connect.php");

   

   	$link=Connection();


	$hora=$_POST["hora"];
	$sens0=$_POST["sens0"];
	$sens1=$_POST["sens1"];
	$sens2=$_POST["sens2"];
	$sens3=$_POST["sens3"];



	$query = "INSERT INTO sensorData (horaLeitura, temperatura, luminosidade, chuva, umidade)
 		VALUES ('".$hora."','".$sens3."','".$sens1."','".$sens0."','".$sens2."');";
 
   	

   	mysql_query($query,$link);

	mysql_close($link);


   	header("Location: index.php");

?>
