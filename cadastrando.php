<?php

	$nickname= $_GET["nickname"]
	
	
		$strcon = mysqli_connect('localhost','id3899895_useradmin','admin','id3899895_usuarios');
		$sql = "INSERT INTO usuarios VALUES ";
		$sql .= "('$nickname')"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
		mysqli_close($strcon);
		echo "Cadastrado com sucesso!";

	

?>
