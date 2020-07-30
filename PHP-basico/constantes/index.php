<?php
	/* Constantes são variaveis não alteráveis
	# Utiliza a função define passando dois parâmetros, 
	sendo o primeiro o nome da variável em MAIÚSCULO, 
	e o segundo, o conteúdo dessa variável.
	Também não utiliza o $.
	*/

	define('NOME', 'William'); 
	define('IDADE', 27);
	echo 'Meu nome é '.NOME.' e tenho '.IDADE.' anos.';

	/* Ao tentar renomear uma constante, irá aparecer um aviso 
	dizendo que a variável já está definida.
	*/

?>