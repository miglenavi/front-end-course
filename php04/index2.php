<?php
$cities =['Berlynas', 'Roma', 'Londonas'];
print_r($cities);
$cities[] = 'Tokijas';
print_r($cities);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <ul>
       <li><?php echo $cities[1]; ?></li>
     </ul>

   </body>
 </html>
