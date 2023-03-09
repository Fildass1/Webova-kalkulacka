<?php
$data = json_decode(file_get_contents("php://input"), true);
$veta = $data["retezec"];
$pole = explode(' ', $veta);
$promena = 0;
$cislo1;
$cislo2;
$pomoc;
while ($promena < count($pole)){
	if ($pole[$promena] == "+" or $pole[$promena] == "-" or $pole[$promena] == "*" or $pole[$promena] == "/"){
		if ($pole[$promena] == "+"){
			$cislo1 = floatval($pole[$promena-1]);
			$cislo2 = floatval($pole[$promena+1]);
			$pomoc = $cislo1 + $cislo2;
			unset($pole[$promena]);
			unset($pole[$promena+1]);
			$pole[$promena-1] = $pomoc;
			$pole = array_values($pole);
			$promena = 0;
		}
		if ($pole[$promena] == "-"){
			$cislo1 = floatval($pole[$promena-1]);
			$cislo2 = floatval($pole[$promena+1]);
			$pomoc = $cislo1 - $cislo2;
			unset($pole[$promena]);
			unset($pole[$promena+1]);
			$pole[$promena-1] = $pomoc;
			$pole = array_values($pole);
			$promena = 0;
		}
		if ($pole[$promena] == "*"){
			$cislo1 = floatval($pole[$promena-1]);
			$cislo2 = floatval($pole[$promena+1]);
			$pomoc = $cislo1 * $cislo2;
			unset($pole[$promena]);
			unset($pole[$promena+1]);
			$pole[$promena-1] = $pomoc;
			$pole = array_values($pole);
			$promena = 0;
		}
		if ($pole[$promena] == "/"){
			$cislo1 = floatval($pole[$promena-1]);
			$cislo2 = floatval($pole[$promena+1]);
			$pomoc = $cislo1 / $cislo2;
			unset($pole[$promena]);
			unset($pole[$promena+1]);
			$pole[$promena-1] = $pomoc;
			$pole = array_values($pole);
			$promena = 0;
		}
	}
	$promena = $promena + 1;
}
echo $pole[0];
?>