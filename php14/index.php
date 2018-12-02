<!DOCTYPE html>
<html>
<body>
  <?php function auto_copyright($year = 'auto'){ ?>
     <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
     <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
     <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
     <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
  <?php } ?>

  &copy; <?php auto_copyright(); ?>

</body>
</html>
