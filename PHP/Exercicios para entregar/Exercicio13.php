<!-- Ler vários números e informar quantos 
números entre 100 e 200 foram digitados. Se 
o valor 0 for lido encerrar a execução-->
<?php
$aux=0;
	do  {
		$a = fgets(STDIN);
		if ($a > 100 && $a < 200) {
			$aux++;
		}
	}
	while ($a != 0);
	echo("Foram digitados $aux valores no intervalo entre 100 e 200.");
?>