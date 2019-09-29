<?php

	pesquisBanco($data);
	
	function pesquisBanco($data)
	{
		try {
		          $conn = new PDO('mysql:host=localhost;dbname=ajax', "root", "");
		          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		          $titulo = $_GET['str'];
		          $sql="SELECT * FROM  filmes  WHERE titulo like '%$titulo%' ";  
		          $consulta = $conn->prepare($sql);	
		          $consulta->execute();
				  //  echo json_encode( $consulta->fetchAll(PDO::FETCH_OBJ));	  
			if($consulta->rowCount()>=1){
			  while($row = $consulta->fetch(PDO::FETCH_OBJ)){
				  echo  $row->titulo;
			   }
			}else
			{
				 echo "nenhum filme encontrado";
			}		  
			
		} catch(PDOException $e) {
			  echo 'ERROR: ' . $e->getMessage();
		  }
	}
	
	



