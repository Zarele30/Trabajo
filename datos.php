<?php
	if(isset($_POST['enviar'])) {
		$n=$_POST['numero'];
		settype($n, "integer");
		$i=0;
		$s=0;
		$s1=0;
		$s2=0;
		do {
			$s=$s+$i;
			if ($i%2==0) {
				$s1=$s1+$i;
			}else {
				$s2=$s2+$i;
			}
			$i++;
		} while ($i <= $n);
		echo "Suma: " .$s. "<br>";
		echo "Suma de números pares: " .$s1. "<br>";
		echo "Suma de números impares: " .$s2. "<br>";

		$x=1;
		while ($x==1) {
			for ($a=3; $a<=$n; $a++) {
				$b=$a-1;
				if ($n%$b==0) {
					$x=0;
				}
			}
			if ($x==0) {
				echo "El número " .$n. " no es primo" . "<br>";
			} else {
				echo "El número " .$n. " sí es primo" . "<br>";
			}
			$x=0;
		}

		$f=1;
		for ($g=1; $g<=$n; $g++) {
			$f=$f*$g;
		}
		echo "El factorial de " .$n. " es: " .$f;
	}
?>