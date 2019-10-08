<!DOCTYPE html>
<html>
<head>
	<title>poo</title>
</head>
<body>
	<pre>
	<?php

		require_once 'AEP2.php';

        $l1= new pessoa("leo",2000,9745529923, 1.75, 68.9);
        $l1->Calculaimc();
        $l1->Getimc();
        $l1->Calculaidade();
		$l1->Getidade();
		$l1->validaCPF();

		print_r($l1);
	?>
	</pre>
</body>
</html>