<?php
$arreglo = [
	'keyStr1' => 'lado',
	0 => 'ledo',
	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'
];

echo "$arreglo[keyStr1],$arreglo[0],$arreglo[keyStr2],$arreglo[1],$arreglo[2]<br>";
echo "$arreglo[2],$arreglo[1],$arreglo[keyStr2],$arreglo[0],$arreglo[keyStr1]";
//, $arreglo[0],$arreglo['keyStr2'],$arreglo[1],$arreglo[2]";
//echo "$arreglo";

echo '.........................................................<br><br>';
echo 'Ejercicio 2 / Paises y ciudades<br><br>';
$paises = [
  'Argentina' => ['Salta','Jujuy','Tucuman'],
	'Peru' => ['La Libertad','Cuzco','Lima'],
	'Mexico' => ['DF','Monterrey','Guadalajara'],
	'Colombia' => ['Bogota','Cartagena','Medellin'],
	'Bolivia' => ['La Paz','Santa Cruz','Tarija']
];

foreach ($paises as $key => $value) {
	echo "<b>$key:</b> $value[0], $value[1], $value[2]<br>";
}

echo '.........................................................<br><br>';
echo 'Ejercicio 3 / Valor Mayores y Menores (3)<br><br>';
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
sort($valores);

echo "<br>Los numeros menores son :<br>";
for ($i=0; $i < 3; $i++) {
	echo $valores[$i].'<br>';
}

echo "<br>Los numeros mayores son :<br>";

for ($i=count($valores)-3; $i <= count($valores); $i++) {
	echo $valores[$i].'<br>';
}
