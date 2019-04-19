<!DOCTYPE HTML>
<html lang="pt">
<head>
	<title>Notícias - Debug</title>
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
	
	
	<hr>

	<?php

	include "conecta.php";
	
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
									ORDER BY data_publicacao DESC 
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
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					
					<h4 class="p-title"><b>Notícias</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<?php echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">"; ?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por:  <b><?php echo $autor; ?></b>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
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
									ORDER BY data_publicacao DESC 
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
						<div class="col-sm-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
							?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
							<b><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por: <a href="#" class="color-black"><b><?php echo $autor; ?></b></a>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
					
					
		<?php	
		
		include "conecta.php";
	
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
									ORDER BY data_publicacao DESC 
									LIMIT 3
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
			
					
						<div class="col-sm-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
							?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
							<b><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por: <a href="#" class="color-black"><b><?php echo $autor; ?></b></a>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						
						
						<?php	
		
		include "conecta.php";
	
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
									ORDER BY data_publicacao DESC 
									LIMIT 4
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
			
					
						<div class="col-sm-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
							?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
							<b><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por: <a href="#" class="color-black"><b><?php echo $autor; ?></b></a>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						
						
						
						<?php	
		
		include "conecta.php";
	
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
									ORDER BY data_publicacao DESC 
									LIMIT 5
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
			
					
						<div class="col-sm-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
							?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
							<b><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por: <a href="#" class="color-black"><b><?php echo $autor; ?></b></a>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						
						
						<?php	
		
		include "conecta.php";
	
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
									ORDER BY data_publicacao DESC 
									LIMIT 6
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
			
					
						<div class="col-sm-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
							?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
							<b><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por: <a href="#" class="color-black"><b><?php echo $autor; ?></b></a>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						
						
						<?php	
		
		include "conecta.php";
	
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
									ORDER BY data_publicacao DESC 
									LIMIT 7
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
			
					
						<div class="col-sm-6">
							<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
							?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
							<b><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por: <a href="#" class="color-black"><b><?php echo $autor; ?></b></a>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						
						
		<?php	
		
		include "conecta.php";
	
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
									ORDER BY data_publicacao DESC 
									LIMIT 8
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
			
					
						<div class="col-sm-6">
							<?php echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">"; ?>
							<h4 class="pt-20"><?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
							<b><?php echo $titulo; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">Por: <a href="#" class="color-black"><b><?php echo $autor; ?></b></a>
								<?php echo $data_publicacao; ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
							</ul>
						</div><!-- col-sm-6 -->
						
						
					</div><!-- row -->
					
					
				</div><!-- col-md-9 -->
				
				
				<!-- Noticias mais populares -->
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						
						
						
						<div class="mtb-50">
							<h4 class="p-title"><b>Posts Populares</b></h4>
							
							<?php	
		
							include "conecta.php";
						
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
														ORDER BY viwes DESC 
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
										echo "Impossivel listar noticias .";
										echo mysql_errno () . " : " . mysql_error ();
									}
						
						?>
						
							<?php echo "<a class=\"pos-relative h-100 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
								<div class="wh-100x abs-tlr"><?php echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">"; ?></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $titulo; ?></b></h5>
									<h6 class="color-lite-black pt-10">Por: <span class="color-black"><b><?php echo $autor; ?></b></span> <?php echo $data_publicacao; ?></h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<?php	
		
							include "conecta.php";
						
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
														ORDER BY viwes DESC 
														LIMIT 2
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
										echo "Impossivel listar noticias .";
										echo mysql_errno () . " : " . mysql_error ();
									}
						
						?>
						
							<?php echo "<a class=\"oflow-hidden pos-relative mb-20 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
								<div class="wh-100x abs-tlr"><?php echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">"; ?></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $titulo; ?></b></h5>
									<h6 class="color-lite-black pt-10">Por: <span class="color-black"><b><?php echo $autor; ?></b></span> <?php echo $data_publicacao; ?></h6>
								</div>
							</a><!-- oflow-hidden -->
							
							
							
							
							<?php	
		
							include "conecta.php";
						
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
														ORDER BY viwes DESC 
														LIMIT 3
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
										echo "Impossivel listar noticias .";
										echo mysql_errno () . " : " . mysql_error ();
									}
						
						?>
						
							<?php echo "<a class=\"oflow-hidden pos-relative mb-20 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
								<div class="wh-100x abs-tlr"><?php echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">"; ?></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $titulo; ?></b></h5>
									<h6 class="color-lite-black pt-10">Por: <span class="color-black"><b><?php echo $autor; ?></b></span> <?php echo $data_publicacao; ?></h6>
								</div>
							</a><!-- oflow-hidden -->
							
							
							
							
							<?php	
		
							include "conecta.php";
						
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
														ORDER BY viwes DESC 
														LIMIT 4
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
										echo "Impossivel listar noticias .";
										echo mysql_errno () . " : " . mysql_error ();
									}
						
						?>
						
							<?php echo "<a class=\"oflow-hidden pos-relative mb-20 dplay-block\" href=\"leu_noticia.php?id=$id\">"; ?>
								<div class="wh-100x abs-tlr"><?php echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">"; ?></div>
								<div class="ml-120 min-h-100x">
									<h5><b><?php echo $titulo; ?></b></h5>
									<h6 class="color-lite-black pt-10">Por: <span class="color-black"><b><?php echo $autor; ?></b></span> <?php echo $data_publicacao; ?></h6>
								</div>
							</a><!-- oflow-hidden -->
							
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 pos-relative">
							<img src="images/banner-1-600x450.jpg" alt="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Anuncie Conosco</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Debug Tek</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						
							
						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
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