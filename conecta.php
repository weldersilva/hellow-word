


<?php
if (eregi("conecta_mysql.php", $_SERVER['SCRIPT_NAME'])){
die ("<script>alert('Sem permição de acesso !')</script>");
}

$conn = @mysql_connect("localhost", "fotot345_usuario", "t3+8cB33]Iw?") 
or die ("Problemas para conectar ao banco de dados");


$db= @mysql_select_db("fotot345_debug", $conn) or die ("Não foi possível selecionar a tabela do banco de dados");

if($db == true)
{
	//echo "ok DB!";
}

?>