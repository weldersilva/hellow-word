
	
	
	
	<?php
	
	$id = $_GET["id"];

	include "conecta.php";
	
		$sqllistanoticias = mysql_query("SELECT 	id,
														titulo,
														sub_titulo,
														texto_destaque,
														texto_noticia,
														autor,
														data_publicacao,
														data_ultima_alteracao,
														id_imagem,
														viwes,
														status 
									FROM noticias 
									WHERE id = '$id' 
									 ");

				$linhas = mysql_num_rows($sqllistanoticias);


				if ($sqllistanoticias == true)
				{

					for($i=0; $i<$linhas; $i++){
					$exibe = mysql_fetch_row($sqllistanoticias);

						$id = $exibe[0];
						$titulo = $exibe[1];
						$sub_titulo = $exibe[2];
						$texto_destaque = $exibe[3];
						$texto_noticia = $exibe[4];
						$autor = $exibe[5];
						$data_publicacao = $exibe[6];
						$data_ultima_alteracao = $exibe[7];
						$id_imagem = $exibe[8];
						$viwes = $exibe[9];
						$status = $exibe[10];

				}

			}
			else
			{
				echo "Impossivel listar noticias 3.";
				echo mysql_errno () . " : " . mysql_error ();
			}




			//contador de visitas simples dando insert no banco a cada nova viwer

			
			
			$sqlcontador = mysql_query("SELECT 	
														viwes
									FROM noticias 
									WHERE id = '$id' 
									 ");
			$linhas = mysql_num_rows($sqlcontador);


			if ($sqlcontador == true)
			{

				for($i=0; $i<$linhas; $i++){
				$exibe = mysql_fetch_row($sqlcontador);

					$viwes = $exibe[0];
				}		
			}
			else
			{
				echo mysql_errno () . " : " . mysql_error ();
			}


			$contadoracesso = $viwes + 1;//adiciona 1 view ao contador
			$sqlcount = mysql_query("UPDATE noticias SET viwes = '".$contadoracesso."' 
					WHERE id = '$id'");
			if($sqlcount == false){
				echo "Falha.<br>";
				echo mysql_errno() . " : " .mysql_error();
			}	


			//sqlcontador2 mostra na noticia
			$sqlcontador2 = mysql_query("SELECT 	
														viwes
									FROM noticias 
									WHERE id = '$id' 
									 ");
			$linhas = mysql_num_rows($sqlcontador2);


			if ($sqlcontador2 == true)
			{

				for($i=0; $i<$linhas; $i++){
				$exibe = mysql_fetch_row($sqlcontador2);

					$viwes = $exibe[0];
				}		
			}
			else
			{
				echo mysql_errno () . " : " . mysql_error ();
			}

			
			
					
					



			
			?>
	<!DOCTYPE HTML>
<html lang="pt">
<head>
	<?php echo "<title>$titulo - Debug Tek</title>"; ?>
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

<header>
		
			<?php

	//inclui arquivo topo para páginas
	include "topo.php";

			?>

	</header>
		
		
	
	
	<hr>
<body>
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<?php
							echo "<img src=\"images/$id_imagem\" alt=\"$titulo\">";
						?>
					<h3 class="mt-30"><b><?php echo $titulo; ?></b></h3>
					<ul class="list-li-mr-20 mtb-15">
						<li>Por: <a href="#"><b><?php echo $autor; ?> </b></a> <?php echo $data_publicacao; ?></li>
						<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $viwes; ?></li>
						
					</ul>
					
					<p><?php echo $sub_titulo; ?></p>
					
					<p class="mtb-15"> <align = "justify"><?php echo $texto_noticia; ?> </align></p>
						
					
					<?php if($texto_destaque != null)
					{
						?>
					<!-- Texto em destaque -->
					<div class="quote-primary mtb-20">
						<h5>"<?php echo $texto_destaque; ?>"</h5>
						
					</div><!-- quote-primary -->
					<?php
					}
					?>
					
					
					<div class="float-left-right text-center mt-40 mt-sm-20">
				
						
						
						
					</div><!-- float-left-right -->
				
					<div class="brdr-ash-1 opacty-5"></div>
					
					
					<div class="row">
					
						
						
					</div><!-- row -->
					
					
					
					<div class="sided-70 mb-40">
					
						
					</div><!-- sided-70 -->
					
					<div class="sided-70 ml-100 ml-xs-20 mb-40">
					
						
						
					</div><!-- sided-70 -->
					
					<div class="sided-70 mb-50">
					
					
						
					</div><!-- sided-70 -->
					
					
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						
						
						<div class="mtb-50">
							<h4 class="p-title"><b>Em alta</b></h4>
							
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