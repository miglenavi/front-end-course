<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($_REQUEST['name'] && $_REQUEST['surname']){
      $name = $_REQUEST['name'];
      $surname = $_REQUEST['surname'];
      echo $name . '<br>' . $surname;
    } else { ?>
      <form action="<?php $_PHP_SELF; ?>" method="POST">
        Vardas: <input type="text" name="name" />
        Pavardė: <input type="text" name="surname" />
        <input type="submit" name="submit" value="submit">
      </form>
      <?php
    }
?>
  </body>
</html>
