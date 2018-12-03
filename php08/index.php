<?php
//The first task
$april = array(-4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15,
19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);

//The second one --- wrong
$avarage = array_sum($april)/count($april);
print_r(round($avarage, 0));
echo "<br>";
echo "<br>";

//`the third one`--- numbers cannot repeat
rsort($april);
$arranged=array_unique($april);

$warm = count($arranged);
for($x = 0; $x < 5; $x++) {
  $highTemp=array_slice($arranged,0,5);
    echo $highTemp[$x];
    echo "<br>";
}

echo "<br>";
echo "<br>";

$cold = count($arranged);
for($x = 0; $x < 5; $x++) {
  $lowTemp=array_slice($arranged,-5,5);
    echo $lowTemp[$x];
    echo "<br>";
}
 ?>
