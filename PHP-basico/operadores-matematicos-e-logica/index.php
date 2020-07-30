<?php
	
	$numero1 = 12;
	$numero2 = 15;

	# Operador menor "<"
	if ($numero1 < $numero2) {
		echo $numero1.' é menor que '.$numero2;
	}else{
		echo $numero1.' não é menor que  '.$numero2;
	}

	# Operador menor ou igual "<="
	if ($numero1 <= $numero2) {
		echo '<br>'.$numero1.' é menor ou igual a '.$numero2;
	}else{
		echo '<br>'.$numero1.' é maior que '.$numero2;
	}

	# Operador maior ou igual ">="
	if ($numero1 >= $numero2) {
		echo '<br>'.$numero1.' é maior ou igual a '.$numero2;
	}else{
		echo '<br>'.$numero1.' é menor q '.$numero2;
	}


	# Operador lógico 'E'
	$var1 = 2;
	$var2 = 2;
	$var3 = 3;

	if (($var1 == $var2) && ($var2 == $var3)) {
		echo '<br><br>Todos os valores são iguais.';
	}else{
		echo '<br><br>Os valores não são todos iguais.';
	}

	# Operador lógico 'OU'
	if (($var1 == $var2) || ($var2 == $var3)) {
		echo '<br><br>Um ou mais valores são iguais';
	}else{
		echo '<br><br>Nenhum valor é igual.';
	}
	
?>