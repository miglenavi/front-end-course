<?php
//The first task
$metai = 1774;

$cities3 =[
  'Tokijas'=> [13.6, 1868, 'Japonija'],
  'Vašingtonas' => [0.6, 1790, 'JAV'],
  'Maskva' => [11.5, 1147, 'Rusija']
];
$cities3['Londonas'] = [8.6, 43, 'Anglija'];
//The second and third one
  if ($metai >= $cities3['Vašingtonas'][1]) {
    echo "Vašingtonas yra {$cities3['Vašingtonas'][1]} sostinė";
//The fourth and fifth
  } elseif ($metai = 1774) {
    echo "{$cities3['Vašingtonas'][2]} sostinė vis dar Filadelfijoje.";
  } else {
    $answer = $cities3['Vašingtonas'][1] - $metai;
    echo "Liko $answer metai(-ų) iki Vašingtono įkūrimo.";
  }
 ?>
