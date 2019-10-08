<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<pre>
		<?php
			//PROGRAMA PRINCIPAL 
			require_once 'pessoaABSTRATA.php';
			require_once 'visitante.php';
			require_once 'alunoAbs.php';
			require_once 'alunobolsista.php';

			$b1= new Bolsista;
			$b1->setmatr(1234);
			$b1->setcurso("ADS");
			$b1->Setnome("Leo");
			$b1->Setidade(18);
			$b1->Setsexo("M");
			$b1->Renovarbolsa();
			$b1->Setbolsa("50%");
			$b1->PagarMensalidade(40);

			//$v1 =  new Visitante;
			//$v1->Setnome("jão");
			//$v1->Setidade(29);
			//$v1->Setsexo("M");

			//$a1 = new Aluno;
			//$a1->setmatr(19904292);
			//$a1->setcurso("enfermagem");
			//$a1->Setnome("Elisa");
			//$a1->Setidade(18);
			//$a1->Setsexo("F");
			//$a1->PagarMensalidade(300);

			//print_r($a1);
			print_r($b1);
			//print_r($v1);
		?>
	</pre>
</body>
</html>