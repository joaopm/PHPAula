<html>
  <form name="form" action="" method="post">
    <input id="number" name="number" class="form-control" type="text" />
  </form>
  <?php
    if(!empty($_POST['number'])) {
      $number = $_POST['number'];
      if($number > 100) {
        echo "o valor eh maior que 100";
      } else if($number < 100) {
        echo "o valor eh menor que 100";
      } else {
        echo "o valor eh igual a 100";
      }
    }
   ?>
</html>
