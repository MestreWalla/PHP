<?php
	$x = 5;
	if($x <+ 6):
		header('Location: Sucesso.php');
	else:
		header('Location: Erro.php');
	endif;
?>