<?php
// The first task
$cities =['Berlynas', 'Roma', 'Londonas'];
// The second task
print_r($cities);
//The forth task
$cities[] = 'Tokijas';
//The fifth task
$cities2 =[
  'Tokijas' => 13.6,
  'Vasingtonas' => 0.6,
  'Maskva' => 11.5
];
//The sixt task
$cities2['Londonas'] = 8.6;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <!-- The third task  -->
     <ul>
       <li><?php echo $cities[1]; ?></li>
     </ul>
     <!-- The seventh task  -->
     <ul>
       <li><?php echo "Gyventojų skaičius: {$cities2['Tokijas']} mln."; ?></li>
     </ul>

   </body>
 </html>
