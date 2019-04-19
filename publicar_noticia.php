<?php

include 'conecta.php';


if(@$_POST["enviar"] == false)
{
?>	
	
<!DOCTYPE HTML>
<html lang="pt">
<head>
	<title>Publicar Notícias</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Inclui favicon no cabeçalho -->
	<?php
		include "head.php";
	?>
	
	
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
	
		
	<link href="common/styles.css" rel="stylesheet">
	
	
</head>
<body>
	
	<header>
		
			<?php

	//inclui arquivo topo para páginas
	include "topo.php";

			?>
			
		
		<?php
		//verifica se usuário é autorizado - 1 para autorizado e 0 para nao autorizado
		if($nivel_usuario != 1)
		{
			echo ("<script LANGUAGE='JavaScript'>
										window.location.href='index.php';
										</script>");
		}
	
	?>

	</header>
	
	
	
	
	<section>
		
		
		<!--formulário para receber dados da noticia a ser publicada-->

			
			<form method="post" enctype="multipart/form-data" action="publicar_noticia.php"<?php echo $_SERVER['PHP_SELF'];?>"">
				<table border=1>
					
					<tr>
						<td> Autor(a) </td>
						<td> <input type="text" name="autor"> </td>
					</tr>
					<tr>
						<td>Título </td>
						<td> <input type="text" name="titulo"> </td>
					</tr>
					<tr>
						<td> Subtítulo </td>
						<td> <input type="text" name="subtitulo"> </td>
					</tr>
					<tr>
						<td> Texto em destaque </td>
						<td> <textarea name="texto_destaque" cols="80" rows="10"></textarea></td>
					</tr>
					<tr>
						<td> Nóticia </td>
						<td> <textarea name="texto_noticia" cols="120" rows="50"></textarea></td>
					</tr>
					<tr>
						<td>Imagem</td>
						<td><input name="id_imagem" type="file" id="id_imagem" value="id_imagem"></td>
					<tr>
						<td><input type="submit" name="enviar" value="enviar"></td>
				</table>
			
			</form>
		
		
		
	</section>
	
	
	<!-- rodape -->
	<footer class="bg-191 color-ccc">
		
		<?php
		
		include "rodape.php";
		
		?>
	</footer>
	<!--fom do radape-->
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/tether.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.js"></script>
	
	<script src="common/scripts.js"></script>
	
</body>
</html>
<?php
}
else
{
	include 'conecta.php';



	////addskashes converte em string e permite inserir caract. especiais no banco de dados


	
	
	$autor 					= $_POST["autor"];
	$titulo 				= addslashes($_POST["titulo"]);
	$subtitulo 				= addslashes($_POST["subtitulo"]);
	$texto_destaque			= addslashes($_POST["texto_destaque"]);
	$texto_noticia 			= addslashes($_POST["texto_noticia"]);
	$foto 					= $_FILES["id_imagem"];	

	//variaveis fora do contexto
	$data_publicacao		 = '0000-00-00 00:00:00';
	$data_ultima_alteracao	 = '0000-00-00 00:00:00';



	/*/***formata data para inserir data de upload no banco*/
		/*/*/
		/*/*/		 date_default_timezone_set('America/Sao_Paulo');
		/*/*/
		/*/*/
		/*/*/		 $data = date('d/m/Y - H:i:s');
		/*/*/
		/*/*/		 function dataformatada($databr){
		/*/*/		 	$databr = str_replace(array(" - ","-"," "," ")," ",$databr);
		/*/*/		 	list($data,$hora) = explode(" ",$databr);
		/*/*/		 	return implode("-",array_reverse(explode("/",$data)))." ".$hora;
		/*/*/		 }
		/*/*/
		/*/*/		 echo "</br>";
		/*/*/
		/*/*/		 $datafinal = dataformatada($data);
		/*/*/
		/*/*/


								if($foto == null || $foto == '' || $foto == ' ')
								{
										$foto = null;
								}
								else
								{
											$foto = isset($_FILES["id_imagem"]) ? $_FILES["id_imagem"] : FALSE;
											// Obtém extensão do arquivo
											preg_match("/\.(pdf|gif|bmp|png|jpg|jpeg|exe|txt|html|html|php|xml|txt|doc|docx|ppt|pptx|odf|asp|lnk|dll|js){1}$/i", $foto["name"], $ext);

											//gera nome para imagens
											
											if($ext == '')
											{
												
											}
											@$imagem_nome = md5(uniqid(time())) . "." . $ext[1];

											// Pasta de uploads
											$imagem_dir = "images/" . $imagem_nome;
											
											// Faz o upload da imagem
											move_uploaded_file($foto['tmp_name'], $imagem_dir);
											
								}	
							


					// Insere os dados no banco
					$sql = mysql_query("INSERT INTO noticias VALUES(NULL,'".$titulo."', '".$subtitulo."', '".$texto_destaque."','".$texto_noticia."'
					,'".$autor."', '".$datafinal."', '".$data_ultima_alteracao."', '".$imagem_nome."', '0',  '0')");




					// Se os dados forem inseridos com sucesso
					if ($sql == true)
					{
						

						
						
						
						
						
							echo "<script> alert('Noticia Cadastrada com Sucesso. ');location.href='publicar_noticia.php'; </script>";


							//prepara para enviar e-mail
							//*************************//
							//$emailclasse = new Email();
							//$emailclasse -> enviacontatoadmin($email,$nome,$assunto,$mensagem,$data,$ip);
							
							
							
						
								

					}
					else
					{
						echo "Falha ao cadastrar.<br>";
						echo mysql_errno() . " : " .mysql_error();
					
					
					}



}




?>

