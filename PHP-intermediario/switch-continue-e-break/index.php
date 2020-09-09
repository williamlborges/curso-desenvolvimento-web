<?php

	$nome = 'William';
	switch ($nome) {
		case 'William':
			echo 'Meu nome é William';
			break;
		case 'João':
			echo 'Meu nome é João';
			break;
	
	}
	echo '<br />';
	//--------------------------------------------------

	for($i=0; $i < 10; $i++){ 
		if ($i ==  5) {
			continue; // ignora as proximas instruções e continua o loop, nesse caso irá pular quando i = 
		}
		echo $i;
		echo '<hr>';
		/*if ($i ==  5) {
			break; // depois de executar o indice 5 o código para e sai do for
		}*/
	}

?>