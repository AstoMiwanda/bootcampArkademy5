<?php 
function createStar($max){
	$isStar = true;
	$result = "";
	echo "<pre>";
	for ($i=0; $i < $max; $i++) { 
		for ($j=0; $j < $max; $j++) { 
			if($isStar)
				$result .="*";
			else
				$result .=" ";

			$isStar = !$isStar;
		}
		$result .="<br>";
	}
	echo "<pre>";
	echo $result;
}

echo createStar(7);