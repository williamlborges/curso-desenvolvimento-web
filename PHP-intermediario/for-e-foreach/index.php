<?php

	/* Ao nomear uma das chaves o índice da próxima chave sem nomeação irá começar no 0
	*/
	$arr = array('chave1'=>'Felipe', 'Gustavo', 'Mario', 'Alexandre');

	foreach ($arr as $key => $value) {
		echo $key.' => '.$value.'<hr />';
	}


	/*Utilizando esse for comum ele não irá pegar o nome Felipe, pois esse for trabalha apenas com índices numéricos.
	*/
	$total = count($arr);	
	echo '<br /><br />';
	for ($i=0; $i < $total; $i++) { 
		echo $arr[$i].'<hr />';
	}

?>