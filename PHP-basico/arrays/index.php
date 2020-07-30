<?php
	
	# Primeira forma
	$nome1 = array('William', 'João', 'Pedro');
	echo $nome1[1].'<br>';

	#Segunda forma
	$nome2[] = 'José';
	$nome2[] = 'Augusto';
	echo $nome2[1];
	/* Note que dessa forma é possível adicionar elementos 
	no array em várias chamadas. A cada adição já irá alocar 
	um espaço de memória automaticamente.
	*/

	# Terceira forma
	$nome2[2] = 'Maria';
	echo '<br>'.$nome2[2];
	$nome2[10] = 'Antonio';
	echo '<br>'.$nome2[10].'<br><br>';

	#Quarta forma
	$arr = ['Rogério', 'Agostinho', 'Matheus'];
	echo $arr[2];

	#Definindo os índices de um array
	$informacao['nome'] = 'William';
	$informacao['idade'] = 27;
	$informacao['cidade'] = 'Campina Verde';

	echo '<br><br>Nome: '.$informacao['nome'].'<br>Idade: '.$informacao['idade'].'<br>Cidade: '.$informacao['cidade'];

?>