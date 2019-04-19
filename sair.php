<!-- Inclui favicon no cabeçalho -->
	<?php
		include "head.php";
	?>
	

<?php



	include 'conecta.php';
	
	session_start();
	
	
	session_destroy();
	
	sleep(2);
							echo ("<script LANGUAGE='JavaScript'>
										
										window.location.href='index.php';
										</script>");
	
	
mysqli_close($sql);


?>