<html>
  
  <head>
 <title>Autenticando usuário</title>
   <script type="text/javascript">
function loginsuccessfully() {
   setTimeout ("window.location='painel.php'", 3000);
}

function loginfailed(){
     setTimeout ("window.location='login.php'", 3000);
    }
   </script>
  </head>
   
   <body>
   
<?php

$conn = @mysql_connect('localhost','id3899895_useradmin','admin','id3899895_usuarios');
if (!$conn) {
    die('Não foi possível Conectar: ' . mysql_error());
}
mysql_select_db('usuarios', $conn);
?>

<?php
$nickname=$_POST ['nickname'];
$sql = mysql_query ("SELECT * FROM  usuarios WHERE nome = '$nickname' ") or die (mysql_error());
$row = mysql_num_rows ($sql);
if($row > 0) {
 $_SESSION ['nickname']=$_POST ['nicknamee'];
 echo "<script>loginsuccessfully()</script>";
 echo "Você foi autenticado com sucesso! Aguade um instante.";
} else {
 echo "Nome de usuário ou senha inválido! aguarde um instante.";
 echo "<script>loginfailed()</script>";  
}
?>

   </body>
</html>﻿