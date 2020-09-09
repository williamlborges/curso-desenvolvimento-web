<?php
	/* array_merge serve para unir 2 ou mais arrays
	Ao unir dois arrays e conter o mesmo indice em ambos
	o valor do primeiro índice é substituiído pelo segundo, como no exemplo o índice "cor"=>"vermelho" é substituído por "verde".

	*/
	$array1 = array("cor" => "vermelho",2, 4);
	$array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
	$result = array_merge($array1, $array2);
	print_r($result);

	echo '<br /><br />';

	/* array_intersect_key irá retornar os valores que contenham a mesma chave em um ou mais arrays. Ira retornar sempre da primeira chave */

	$arr1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
	$arr2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

	print_r(array_intersect_key($arr1, $arr2));

	echo '<br /><br />';

	/* array_map
	Aplica uma função em todos os elementos do array passado
	Nesse exemplo está aplicando a função strip_tags, retirando todas as tags html do array.
	*/
	$arr = ['<p>Pedro</p>', 'João', '<h1>Natalino</h1>'];
	print_r($arr);
	print_r(array_map('strip_tags', $arr));



?>