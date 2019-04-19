<?php

	session_start();
	@$id_usuario 	= $_SESSION["id"]; 
	@$usuario 		= $_SESSION["usuario"];
	@$nivel_usuario = $_SESSION["nivel_usuario"];
	

?>

<header>
		
		
		<div class="container">
			<a class="logo" href="index.php"><img src="images/logo-black.png" alt="Logo"></a>
			
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
			
			<?php
			
			if($usuario == false)
			{
				echo "<li><a href=\"login.php\" title=\"Login\">Login</a></li>";
			}
			else
			{
				echo "<li>$usuario</li>";	
			}
			
			if($nivel_usuario == 1)
			{
				echo "<li><a href=\"administrar_noticias.php\" title=\"Administrar Notícias\">Administrar Notícias</a></li>";
			}
			
				
			?>
				<li><a href="noticias.php" title="Notícias">Notícias</a></li>
				<li><a href="analises.php" title="Análises e Dicas">Análises e dicas</a><li>
				<li><a href="eventos.php" title="Eventos">Eventos</a></li>
			<?php
			if($usuario == false)
			{
				
			}
			else
			{
				echo "<li><a href=\"sair.php\" title=\"Sair\">Sair</a></li>";
			}
			?>
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
	
	
	