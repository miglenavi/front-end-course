<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($_REQUEST['ilgis'] && $_REQUEST['plotis']){
      $plotas = $_REQUEST['ilgis'] * $_REQUEST['plotis'];
      echo "Jūsų stačiakampio plotas yra $plotas cm";
    } elseif ($_REQUEST['ilgis'] || $_REQUEST['plotas']){
      echo "<p>Prašau įvesti informaciją</p>";?>
      <form action="<?php $_PHP_SELF; ?>" method="POST">
        Ilgis: <input type="number" name="ilgis" />
        Plotis: <input type="number" name="plotis" />
        <input type="submit" name="submit" value="submit">
      </form> <?php
    } else{ ?>
      <form action="<?php $_PHP_SELF; ?>" method="POST">
        Ilgis: <input type="number" name="ilgis" />
        Plotis: <input type="number" name="plotis" />
        <input type="submit" name="submit" value="submit">
      </form>
      <?php
    }
     ?>
  </body>
</html>
