<!DOCTYPE html>
<html>
	<head>
		<title>aula poo</title>
	</head>
		<body>
			<h1>Poliformismo</h1>
			<pre>
			 <?php
				require_once 'mamifero.php';
				require_once 'Reptil.php';
				require_once 'cachorro.php';
				require_once 'Lobo.php';

				$m =  new cachorro;
				$a =  new Lobo;
				$r =  new Mamifero;

				$m-> emitirsom();
				$a-> emitirsom();
				$r-> emitirsom();

				

				print_r($m);
				print_r($a);
				print_r($r); 


			 ?>
			</pre>
		</body>
</html>