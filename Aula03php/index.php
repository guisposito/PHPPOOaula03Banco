<!DOCTYPE html>
<html>
<head>
	<title>Aula02</title>
</head>
<body>
	<hr>
	<pre class="container">
	<?php
		require_once 'ContaBanco.php';

		$p1 = new ContaBanco(); //jubileu
		$p2 = new ContaBanco(); //Creuza

		$p1 ->abrirConta("CC");
		$p1 ->setNumconta(1111);
		$p1 ->setDono("Jubileu");
	
		$p2->abrirConta("CP");
		$p2->setNumconta(2222);
		$p2->setDono("Creuza");


		$p1->depositar(300);
		$p2->depositar(1500);

		$p1->sacar(150);
		$p2->sacar(200);


		print_r($p1);
		echo "<hr><br>";
		print_r($p2);
	?>
	</pre>
	<hr>
</body>
</html>