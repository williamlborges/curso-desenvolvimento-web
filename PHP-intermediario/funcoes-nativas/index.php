<?php
	
	/* Trabalhando com datas */

	// definindo o fuso brasileiro
	date_default_timezone_set('America/Sao_Paulo');

	// padrão brasileiro dia, mês e ano  
	$date = date('d/m/Y H:i:s');
	echo $date;

	$week = date('l'); // representação textual completa do dia da semana
	$sufixo = date('S'); // sufixo ordinal para o dia do mês
	$day = date('j'); // representação do dia do mês sem zero a esquerda
	$month = date('F'); // dia do mês completo, em inglês
	$year = date('Y'); // dia do ano com 4 dígitos

	// data no padrão americano
	echo "<h2>$week, $month $day$sufixo, $year.</h2>";

	echo '<br />';
	// Inglês britânico
	echo "<h2>$week, $day$sufixo $month $year.</h2>";


	// Utilizando arrays para converter a data por extenso no formato PT-BR

	

	$data = date('D'); // representação abreviada dos dias da semana
	$mes = date('M');  // representação abreviada de um mês
	$dia = date('d');  // representação de um dia do mês com zero à esquerda
	$ano = date('Y'); // representação do ano com 4 dígitos
	$hora = date('H:i:s');
	$semana = array(
	    'Sun' => 'Domingo',
	    'Mon' => 'Segunda-Feira',
	    'Tue' => 'Terca-Feira',
	    'Wed' => 'Quarta-Feira',
	    'Thu' => 'Quinta-Feira',
	    'Fri' => 'Sexta-Feira',
	    'Sat' => 'Sábado'
	);

	$mes_extenso = array(
	    'Jan' => 'Janeiro',
	    'Feb' => 'Fevereiro',
	    'Mar' => 'Marco',
	    'Apr' => 'Abril',
	    'May' => 'Maio',
	    'Jun' => 'Junho',
	    'Jul' => 'Julho',
	    'Aug' => 'Agosto',
	    'Nov' => 'Novembro',
	    'Sep' => 'Setembro',
	    'Oct' => 'Outubro',
	    'Dec' => 'Dezembro'
	);

	echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano} $hora";


?>