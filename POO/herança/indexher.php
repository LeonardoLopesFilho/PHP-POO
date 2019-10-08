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
			require_once'pessoaHerança.php';
			require_once'aluno.php';
			require_once'professor.php';
			require_once'funcionario.php';

			$p1 = new pessoa();
			$p2 = new Aluno();
			$p3 = new Professor();
			$p4 = new funcionario(); 

			$p1->Setnome("Pedro");
			$p2->Setnome("Maria");
			$p3->Setnome("Claudio");
			$p4->Setnome("Jão");

			$p2->setcurso("informatica");
			$p3->setsalario(6000);
			$p4->setsetor("Vendedor");

			$p3->ReceberAum(6000);
			$p4->mudartrabalho();
			$p2->cancelarMatr();

			print_r($p1);
			print_r($p2);
			print_r($p3);
			print_r($p4);
			



		?>
	</pre>
</body>
</html>