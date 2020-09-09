<?php
	
	/* Gera um atraso no código em segundos */

	sleep(3);
	echo 'Olá mundo!<br />';

	/* Interrompe a execução do código */

	$nome = 'William';

	if ($nome != 'William') {
		echo 'Tudo certo!';
	}else{
		die('O script parou de ser executado.');
	}

	echo 'Esse código não séra executado.';
	


?>