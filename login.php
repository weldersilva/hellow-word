<?php

	include "conecta.php";
	
	

?>

<!DOCTYPE HTML>
<html lang="pt">
<head>
	<title>Debug</title>
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

	</header>
	
	
	
	<form action="valida_login.php" method="post">
	<section>
		<div class="container">
			<div class="row">
			
				
			
				<table border=1 align=center>
					<tr>
						<td> Usuário </td>
						<td><input type="text" name="usuario">  </td>
					</tr>
					<tr>
						<td> Senha </td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr rows="2">
						<td><input type="submit" value="enviar"></td>
					</tr>
				</table>
			</form>


				
				
			</div><!-- row -->
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