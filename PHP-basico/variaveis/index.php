<?php
	/* Fazer comentários 
		# - hashtag também funciona para comentar uma linha
	*/

	$nome = 'William';
	$idade = 27;
	$bool = true; # variavel booleana retorna 1 para true e 0 para false
	$double = 10.09;

	# Concatenando variáveis
	echo 'Meu nome é '.$nome.' e tenho '.$idade.' anos.';

	echo '<br><br>'.$bool;
	echo '<br>'.$double;


	/* Pode-se também utilizar aspas duplas ao invés de aspas simples no echo.
	   Dessa forma, não é preciso utilizar a concatenação para uní-las.
	*/
	$name = 'Astolfo';
	$age = 40;
	echo "<br><br>O nome dele é $name e sua idade é $age anos.";

	/*OBS: Deve-se ter cuidado ao utilizar aspas duplas quando utiliza html junto com php, pois algumas tags do html utiliza aspas duplas, e, ao utilizar aspas duplas novamente dentro dessa tag, o programa vai entender que está fechando as apas.
	*/

	$nome_da_classe = 'box';
	echo "<br><br><div class=\"$nome_da_classe\">Meu conteúdo da div</div> ";

	# Utilizando a contra-barra é possível utilzar as aspas duplas no código html

?>