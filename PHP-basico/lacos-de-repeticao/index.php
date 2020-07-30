<?php
	
	# Laço de repetição for

	# Loop crescente
	for($i=0;$i<10;$i++) {
		echo 1+$i.' - Hello World!<hr>';
	}

	# Loop decrescente
	echo '<br><br>';
	for($i=10;$i>0;$i--) {
		echo $i.' - Hello World!<hr>';
	}

	# Laço de repetição while
	# Confere a condição antes de executar
	echo '<br><br>';
	$cont = 0;
	while($cont < 10) {
		echo 'Olá mundo!<hr>';
		$cont++;
	}

	# Laço de repetição do while
	# Executa pelo menos umas vez para verificar no final
	echo '<br><br>';
	$contador = 10;
	do {
		echo 'Hello Mundo<hr>';
		$contador--;
	}while($contador > 0);
?>