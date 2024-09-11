<?php
$nome=$_GET['nome'];




	$processador=$_GET['processador'];
	switch ($processador) {
		case '1':
			$cpu="intel i3";
			break;
		case '2':
			$cpu="intel i5";
			break;
		case '3':
			$cpu="intel i7";
			break;
		case '4':
			$cpu="intel i9";
			break;
		
	}

	$memoria=$_GET['memoria'];
	switch ($memoria) {
		case '1':
			$mem="DDR 3 - 4GB";
			break;
		case '2':
			$mem="DDR 4 - 4GB";
			break;
		case '3':
			$mem="DDR 4 - 8GB";
			break;
		case '4':
			$mem="DDR 4 - 16GB";
			break;
		
	}




echo "Senhor(a) ".$nome.",<br><br>";
echo "segue seu orçamento:<br>";



echo "processador: ".$cpu."<br>";
echo "memória: ".$mem."<br>";
?>
