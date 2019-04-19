<?php

	include "conecta.php";

?>

<!DOCTYPE HTML>
<html lang="pt">
<head>
	<title>Debug Tec</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Inclui favicon no cabeçalho -->
	<?php
		include "head.php";
	?>
	
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
	
		
	<link href="common/styles.css" rel="stylesheet">
	
	
</head>
<body>
	
<?php

	//inclui arquivo topo para páginas
	include "topo.php";

?>
	<?php


	
		$sqllistanoticias = mysql_query("SELECT 	id,
														titulo,
														sub_titulo,
														texto_noticia,
														autor,
														data_publicacao,
														data_ultima_alteracao,
														id_imagem,
														viwes,
														status  
									FROM noticias 
									WHERE status = 0 
									ORDER BY id DESC 
									LIMIT 1
									");
									

				$linhas = mysql_num_rows($sqllistanoticias);


				if ($sqllistanoticias == true)
				{

					for($i=0; $i<$linhas; $i++){
					$exibe = mysql_fetch_row($sqllistanoticias);

						$id = $exibe[0];
						$titulo = $exibe[1];
						$sub_titulo = $exibe[2];
						$texto_noticia = $exibe[3];
						$autor = $exibe[4];
						$data_publicacao = $exibe[5];
						$data_ultima_alteracao = $exibe[6];
						$id_imagem = $exibe[7];
						$viwes = $exibe[8];
						$status = $exibe[8];

				}

			}
			else
				{
					echo "Impossivel listar noticias 1.";
					echo mysql_errno () . " : " . mysql_error ();
				}
					
				

	?>
	<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
					
						<div class="img-bg bg-1 bg-grad-layer-6">
						<?php echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">"; ?>
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b><?php echo $titulo; ?></b></h3>
							<ul class="list-li-mr-20">
								<li>Por: <span class="color-primary"><b><?php echo $autor; ?></b></span> 
									<?php echo date('d-m-Y H:i:s', strtotime($data_publicacao)); ?></li>

								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
	<?php

	
	
		$sqllistanoticias = mysql_query("SELECT 	id,
														titulo,
														sub_titulo,
														texto_noticia,
														autor,
														data_publicacao,
														data_ultima_alteracao,
														id_imagem,
														viwes,
														status 
									FROM noticias 
									WHERE status = 0 
									ORDER BY id DESC 
									LIMIT 2");

				$linhas = mysql_num_rows($sqllistanoticias);


				if ($sqllistanoticias == true)
				{

					for($i=0; $i<$linhas; $i++){
					$exibe = mysql_fetch_row($sqllistanoticias);

						$id = $exibe[0];
						$titulo = $exibe[1];
						$sub_titulo = $exibe[2];
						$texto_noticia = $exibe[3];
						$autor = $exibe[4];
						$data_publicacao = $exibe[5];
						$data_ultima_alteracao = $exibe[6];
						$id_imagem = $exibe[7];
						$viwes = $exibe[8];
						$status = $exibe[8];

				}

			}
			else
				{
					echo "Impossivel listar noticias 2.";
					echo mysql_errno () . " : " . mysql_error ();
				}
			
			?>		
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						
						<?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
						
							<div class="img-bg bg-2 bg-grad-layer-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
							?>
							</div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php echo $titulo; ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php echo $data_publicacao; ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					

					<?php

	
	
		$sqllistanoticias = mysql_query("SELECT 	id,
														titulo,
														sub_titulo,
														texto_noticia,
														autor,
														data_publicacao,
														data_ultima_alteracao,
														id_imagem,
														viwes,
														status 
									FROM noticias 
									WHERE status = 0 
									ORDER BY id DESC 
									LIMIT 3");

				$linhas = mysql_num_rows($sqllistanoticias);


				if ($sqllistanoticias == true)
				{

					for($i=0; $i<$linhas; $i++){
					$exibe = @mysql_fetch_row($sqllistanoticias);

						$id = $exibe[0];
						$titulo = $exibe[1];
						$sub_titulo = $exibe[2];
						$texto_noticia = $exibe[3];
						$autor = $exibe[4];
						$data_publicacao = $exibe[5];
						$data_ultima_alteracao = $exibe[6];
						$id_imagem = $exibe[7];
						$viwes = $exibe[8];
						$status = $exibe[8];

				}

			}
			else
				{
					echo "Impossivel listar noticias 3.";
					echo mysql_errno () . " : " . mysql_error ();
				}
			
			?>		


					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
						
							<div class="img-bg bg-3 bg-grad-layer-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
						?>
							</div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php echo $titulo; ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php echo $data_publicacao; ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			


					<?php

	
	
		$sqllistanoticias = mysql_query("SELECT 	id,
														titulo,
														sub_titulo,
														texto_noticia,
														autor,
														data_publicacao,
														data_ultima_alteracao,
														id_imagem,
														viwes,
														status  
									FROM noticias 
									WHERE status = 0 
									ORDER BY id DESC 
									LIMIT 4");

				$linhas = mysql_num_rows($sqllistanoticias);


				if ($sqllistanoticias == true)
				{

					for($i=0; $i<$linhas; $i++){
					$exibe = @mysql_fetch_row($sqllistanoticias);

						$id = $exibe[0];
						$titulo = $exibe[1];
						$sub_titulo = $exibe[2];
						$texto_noticia = $exibe[3];
						$autor = $exibe[4];
						$data_publicacao = $exibe[5];
						$data_ultima_alteracao = $exibe[6];
						$id_imagem = $exibe[7];
						$viwes = $exibe[8];
						$status = $exibe[8];

				}

			}
			else
				{
					echo "Impossivel listar noticias 4.";
					echo mysql_errno () . " : " . mysql_error ();
				}
			
			?>

			<div class="h-1-3 oflow-hidden">
		
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
					
						<div class="img-bg bg-4 bg-grad-layer-6">
						<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
						?>
						
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php echo $titulo; ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				



					<?php

	
	
		$sqllistanoticias = mysql_query("SELECT 	id,
														titulo,
														sub_titulo,
														texto_noticia,
														autor,
														data_publicacao,
														data_ultima_alteracao,
														id_imagem,
														viwes,
														status 
									FROM noticias 
									WHERE status = 0 
									ORDER BY id DESC 
									LIMIT 5");

				$linhas = @mysql_num_rows($sqllistanoticias);


				if ($sqllistanoticias == true)
				{

					for($i=0; $i<$linhas; $i++){
					$exibe = @mysql_fetch_row($sqllistanoticias);

						$id = $exibe[0];
						$titulo = $exibe[1];
						$sub_titulo = $exibe[2];
						$texto_noticia = $exibe[3];
						$autor = $exibe[4];
						$data_publicacao = $exibe[5];
						$data_ultima_alteracao = $exibe[6];
						$id_imagem = $exibe[7];
						$viwes = $exibe[8];
						$status = $exibe[8];

				}

			}
			else
				{
					echo "Impossivel listar noticias 4.";
					echo mysql_errno () . " : " . mysql_error ();
				}
			
			?>






				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
					
						<div class="img-bg bg-5 bg-grad-layer-6">
						<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
						?>
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php echo $titulo; ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				


					<?php

	
	
		$sqllistanoticias = mysql_query("SELECT 	id,
														titulo,
														sub_titulo,
														texto_noticia,
														autor,
														data_publicacao,
														data_ultima_alteracao,
														id_imagem,
														viwes,
														status 
									FROM noticias 
									WHERE status = 0 
									ORDER BY id DESC 
									LIMIT 6");

				$linhas = mysql_num_rows($sqllistanoticias);


				if ($sqllistanoticias == true)
				{

					for($i=0; $i<$linhas; $i++){
					$exibe = mysql_fetch_row($sqllistanoticias);

						$id = $exibe[0];
						$titulo = $exibe[1];
						$sub_titulo = $exibe[2];
						$texto_noticia = $exibe[3];
						$autor = $exibe[4];
						$data_publicacao = $exibe[5];
						$data_ultima_alteracao = $exibe[6];
						$id_imagem = $exibe[7];
						$viwes = $exibe[8];
						$status = $exibe[8];

				}

			}
			else
				{
					echo "Impossivel listar noticias 3.";
					echo mysql_errno () . " : " . mysql_error ();
				}
			
			?>


				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
					
						<div class="img-bg bg-6 bg-grad-layer-6">
						<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
						?>
						</div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php echo $titulo; ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
	

	<section>
		
	
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