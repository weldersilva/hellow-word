<?php



	include 'conecta.php';
	
	session_start();
	
	
	
	
	$usuario 	= $_POST['usuario'];
	$password	= $_POST['password'];

	
	


//compara usuário
$result = mysql_query("SELECT * FROM usuario WHERE nome_usuario = '$usuario'
													AND   senha		   = '$password'
													");

									if($result == true)
									{
										
										echo ("<script LANGUAGE='JavaScript'>
										
										window.location.href='index.php';
										</script>");
									}
									else
									{
										echo ("<script LANGUAGE='JavaScript'>
										window.alert('Usuario invalido.');
										window.location.href='login.php';
										</script>");
									}
										
	
										
	
$linhas = mysql_num_rows($result);

for($i=0; $i<$linhas; $i++){
$registro = mysql_fetch_row($result);

$id 			= $registro[0];
$usuario 		= $registro[1];
$senha 			= $registro[2];
$data_cadastro 	= $registro[3];
$nivel_usuario 	= $registro[4];


}

$_SESSION["id"]	 = $id;
$_SESSION["usuario"] = $usuario;
$_SESSION["nivel_usuario"] = $nivel_usuario;



		
		
mysqli_close($sql);


?>