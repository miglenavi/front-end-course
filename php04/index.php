<?php
$cities2 =['Tokijas','Vasingtonas', 'Maskva'];
$cities2 =[
  'Tokijas' => 13.6,
  'Vasingtonas' => 0.6,
  'Maskva' => 11.5
];
$cities2['Londonas'] = 8.6;
print_r($cities2);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <ul>
       <li><?php echo "Gyventojų skaičius: $cities2[Tokijas] mln."; ?></li>
     </ul>
   </body>
 </html>
