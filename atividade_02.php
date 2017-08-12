<html>
  <form name="form" action="" method="post">
    <input id="number" name="number" class="form-control" type="text" />
  </form>
  <?php
    if(!empty($_POST['number'])) {
      $number = $_POST['number'];
      if($number > 0) {
        echo "o valor eh positivo";
      } else if($number < 0) {
        echo "o valor eh negativo";
      } else {
        echo "o valor eh igual a 0";
      }
    }
   ?>
</html>
