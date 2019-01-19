<?php
function print_abc($col, $row){
	$num = 97;
	for ($i=0; $i < $row; $i++) { 
		for ($j=0; $j < $col; $j++) { 
			if($num > 122)
				$num = 97;
			echo chr($num);
			$num++;
		}
		echo "<br>";
	}
}

echo print_abc(3,4);