<?php
	
	/*Nesse exemplo, é criado um array de arrays, ou seja,
	dentro de um array possui dois arrays, onde cada array possui dois indices
	Sendo o primeiro, o índice do array, e o segundo, o índice de posição dentro do array
	O array onde está armazenado nomes é o array de índice 0, e o de números, o array de índice 1
	Dentro do array 0 existe dois registros, onde breno é o registro de índice 0 e Carlos, índice 1.
	O segundo array, onde estão os números 25 e 32 é o array de índice 1, e os valores guardados dentro desse array
	possui os índices 0 e 1, respectivamente.
	*/
	$arr = array(array('Nome', 'Idade'), array('Breno', 'Carlos'), array(25, 32));
	echo $arr[1][0];

	
?>