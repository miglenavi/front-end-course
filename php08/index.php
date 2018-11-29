<?php
//The first task
 $april = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15,
19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

//The second one
foreach ($april as $april) {
 $april = round($april);
}
print_r($april);

echo "<br>";
echo "<br>";

//`the third one`
$april = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15,
19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
rsort($april);

$warm = count($april);
for($x = 0; $x < 5; $x++) {
  $highTemp=array_slice($april,0,5);
    echo $highTemp[$x];
    echo "<br>";
}

echo "<br>";
echo "<br>";

$cold = count($april);
for($x = 0; $x < 5; $x++) {
  $lowTemp=array_slice($april,-5,5);
    echo $lowTemp[$x];
    echo "<br>";
}

 ?>
