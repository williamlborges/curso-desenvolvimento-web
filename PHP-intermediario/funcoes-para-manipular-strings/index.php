<?php

	$conteudo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

	echo substr($conteudo, 0, 20); // imprime o texto do início [0] até o caracter de índice 20 - 1 

	$nome = 'William Lima Borges';

	// o explode converte uma string em um array através de um delimitador, nesse caso o espaço
	$nomes = explode(' ', $nome);

	echo '<br />';
	print_r($nomes);

	/*implode é o contrário do explode
	 ele junta um array de strings em uma única string
	 definindo por qual delimitador as strings serão separadas
	 */
	$names = array('Laranja', 'Abacaxi', 'Limão');
	$names = implode(', ', $names);
	echo '<br />';
	echo $names;
?>