<?php
  if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
      if ($num1 != $num2) {
        $ans = $num1 + $num2;
        echo 'Sum is: '. $ans;
      }else {
        $ans = 3 * ($num1 + $num2);
        echo 'Triple Sum: '. $ans;
      }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="num1" value="" placeholder="Enter First Number"><br>
      <input type="text" name="num2" value="" placeholder="Enter Second Number"><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
