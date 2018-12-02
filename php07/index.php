<?php
//The first task
$cities4 =['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <!-- The second and third task -->
     <ul>
       <?php
       for($i = 0; $i < count($cities4); $i++) {
         echo "<li>$cities4[$i]</li>";
       }
        ?>
     </ul>
     <!--The forth task -->
     <ul>
       <?php foreach ($cities4 as $city) {
         echo "<li>$city</li>";
       } ?>
     </ul>
   </body>
 </html>
