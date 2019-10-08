<!DOCTYPE html>
<html>
<head>
	<title>poo</title>
</head>
<body>
	<pre>
	<?php

		require_once 'Pessoa.php';
		require_once 'Livro.php';

		$p[0] = new Pessoa("leonardo","Masculino",17);
		$p[1] = new Pessoa("Jão","Masculino",9);
		$p[2] = new Pessoa("isa","feminino",10);

		$l[0] = new Livro("PHP Basico","josé da silva",300,$p[0]);
		$l[1] = new Livro("PHP intermediario","yodinha",233,$p[1]);
		$l[2] = new Livro("PHP avançado","jukera",688,$p[2]);


		print_r($l[0]);
	?>
	</pre>
</body>
</html>