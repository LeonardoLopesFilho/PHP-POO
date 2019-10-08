<!DOCTYPE html>
<html>
	<head>
		<title>aula poo</title>
	</head>
		<body>
			<h1>UEM No Teatroooooooooooooooooooooooo</h1>
			<pre>
			<?php
				require_once 'UEC NO TEATRO.php';
				require_once 'Luta.php';
				$l = array();
				$l[0]= new Lutador("Pretty boy","França   ", 30, 1.75, 68.9, 11, 2, 1);
				$l[1]= new Lutador("Putscript ","Brasil   ", 29, 1.68, 57.8, 14, 2, 3);
				$l[2]= new Lutador("SnapShadow","EUA      ", 35, 1.65, 80.9, 12, 2, 1);
				$l[3]= new Lutador("Dead Code ","Australia", 28, 1.93, 81.6, 13, 0, 2);
				$l[4]= new Lutador("UFOCobol  ","Brasil   ", 37, 1.70, 119.3, 5, 4, 3);
				$l[5]= new Lutador("Nerdaart  ","EUA      ", 30, 1.81, 105, 12, 2, 4);

				$UEC01 = new Luta();
				$UEC01->marcarluta($l[0], $l[1]);
				$UEC01->lutar();
				$UEC01->apresentar();
			?>
			</pre>
		</body>
</html>