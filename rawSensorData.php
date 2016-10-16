<?php


	include("connect.php");
 	

	$link=Connection();


	$result=mysql_query("SELECT * FROM `sensorData` ORDER BY `horaLeitura` DESC LIMIT 300",$link);

?>


<html>

   <head>

      <title>Garduino Beta</title>

   </head>

<body>

   <h1>Dados de Sensores</h1>


   <table border="1" cellspacing="1" cellpadding="1">

		<tr>

			<td>&nbsp;Hora&nbsp;</td>

			<td>&nbsp;Temperatura&nbsp;</td>

			<td>&nbsp;Luminosidade&nbsp;</td>

			<td>&nbsp;Chuva&nbsp;</td>

			<td>&nbsp;Umidade&nbsp;</td>

		</tr>


      <?php
 
		  if($result!==FALSE){

		     while($row = mysql_fetch_array($result)) {

		        printf("<tr><td> &nbsp;%s </td>
				<td> &nbsp;%s&nbsp; </td>
				<td> &nbsp;%s&nbsp; </td>
				<td> &nbsp;%s&nbsp; </td>
				<td> &nbsp;%s&nbsp; </td></tr>",
 
		           $row["timeStamp"], $row["temperatura"], $row["luminosidade"], $row["chuva"], $row["umidade"]);

		     }

		     mysql_free_result($result);

		     mysql_close();

		  }
      ?>


   </table>

</body>

</html>
