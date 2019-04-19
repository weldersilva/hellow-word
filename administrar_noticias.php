<!DOCTYPE HTML>
<html lang="pt">
<head>
	<title>Administrar Notícias</title>
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
		
		
		
			<div class="container">
		
			
			
			
			
			<ul class="main-menu" id="main-menu">
			
			
				<li><a href="publicar_noticia.php" title="Publicar Noticias">Publicar Notícia</a></li>
				<li><a href="#" title="Análises e Dicas">Editar Notícia</a><li>
				<li><a href="#" title="Eventos">Cadastrar Usuário</a></li>
			
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
		
		
		
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