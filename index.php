<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
		<div class="superior">
			<img src="images/superior.jpg" width="980" height="200">
		</div>
 	<table>
  
  		<td class ="bold" colspan="2">For data scientists</td>
		<td class ="bold" colspan="2">For IT professionals</td>
	
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  
 		 
  
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      
		<tr>
			<td><img align="right" src ="<?php echo $row['imagen_servicio']?>"/></td>
			<td class ='alnleft'><?php echo $row['nombre_servicio']?><br/> <?php echo $row['descripcion_servicio']?></td>
		<?php $row = $result -> fetch_assoc() ?>
			<td><img align ="right" src ="<?php echo $row['imagen_servicio']?>" /></td>
			<td class ='alnleft'><?php echo $row['nombre_servicio']?><br/><?php echo $row['descripcion_servicio']?></td>
		</tr>
     <?php }
     
  } else {
      echo "0 results";
  }
  
  $conn->close();
 ?> 
 </table>
 	<div class="inferior">
		<img src="images/inferior.jpg" width="950" height="220">
	</div>

 </body>
 </html>
