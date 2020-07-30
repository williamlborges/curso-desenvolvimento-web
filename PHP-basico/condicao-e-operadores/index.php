<?php
	$var1 = 'William';
	$var2 = 'WILLIAM';
	echo $var1.'<br>'.$var2;

	if ($var1 == $var2) {
		echo '<br>As variáveis são iguais.';
	}else{
		echo '<br>As variáveis são diferentes.';
	}

	$var3 = 10 + 5;
	$var4 = '10 + 5'; # $var4 é string
	echo '<br><br>'.$var3.'<br>'.$var4;

	if ($var3 == $var4) {
		echo '<br>São iguais.';
	}else{
		echo "<br>Não são iguais.";
	}

	$valor1 = 10;
	$valor2 = '10';
	echo '<br><br>'.$valor1.'<br>'.$valor2;
	/* Mesmo uma variável sendo inteiro a outra uma string
	os valores contidos nas variáveis são os iguais.
	*/
	if ($valor1 == $valor2){
		echo '<br>São iguais.';
	}else{
		echo '<br>São diferentes.';
	}

	/* Aqui, além das variáveis terem o mesmo valor, elas também 
	precisam ter o mesmo tipo, senão não entra no if. 
	Para essa comparação utiliza "===".
	*/
 	if ($valor1 === $valor2) {
		echo '<br>São idênticos.';
	}else{
		echo '<br>Não são idênticos.';
	}

	/* Do mesmo modo, essa comparação também pode ser feita
	com o operador diferente "!=".
	*/
	if ($valor1 != $valor2) {
		echo '<br><br>Valores diferentes.';
	}else{
		echo '<br><br>Valores iguais.';
	}

	/* Comparando se o tipo primitivo também é diferente */
	if ($valor1 !== $valor2) {
		echo '<br>Os tipos primitivos são diferentes.';
	}else{
		echo '<br>Os tipos primitivos são iguais.';
	}

?>