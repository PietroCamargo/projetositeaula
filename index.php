<!--
<php
    $ipPLayer =  $_SERVER["REMOTE_ADDR"];
	include("connection.php");
?>
-->

<html>
<html  = lang"pt-br">
    <head>
<meta charset="UTF-8">
        <title>Tudo sobre Aika</title>
    </head>
    <body>
            <div class="countainer">  </div>
            <div class="logo">
                <img src="img/aikalogo.png" alt="aikalogo">
        </div>
            <div class="login">
                <form action="userauthentication.php" method="POST">
                    <div id="input">
                        <span>Nickname</span>
                            <input name="input_User" type="text" /> <br />
                        <input type="submit" value="Registrar/Logar" />
                    </div>
<!--<span class="span_IP"> Seu Endereço de IP é( <b> <?php echo $ipPlayer; ?></b>)e foi guardado em nosso servidor para caso alguma ameçada o envolva. </span> -->
                </form>
        
            </div>
            
    
    </body>
        

</html>
<!--
<php
	if(isset($_GET["pag"])){
		$user = $POST["input_User"];
		$pass = $POST["input_Pass"];
		if($user == "" OR $pass == ""){
			echo "<script> alert ('Insira Nickname e Senha'); location.href='pag-login'</script>";
		}
		$check = mysql_query ("SELECT * FROM usuarios WHERE Nickname='$user' AND Senha='$pass'") or die (mysql_error());
		$row = mysql_num_rows($check);
		if($row > 0){
			$check2 = mysql_query("select Permissao FROM Usuarios WHERE Nickname='$user'");
			$row2   = ,mysql_num_rows($check2);
			if($row2){
				$dadosNickname =  mysql_fetch_array($check2)
				if($dadosnickname["Permissao"] == 1{
					echo "<script> alert ('Logado com Sucesso.'); location.href='control-painel.php'</script>
		}
		else{
			echo "<script> alert('Insira dados corretos'); location.href='pag-login.php'</script>";
		}			
		
		
Coloquei outro modo porque aqui eu n tava usando java sctript mas esse daqui funciona tambem :)


?>

-->
