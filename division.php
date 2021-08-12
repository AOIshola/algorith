<?php
if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  echo $num1/$num2;
}
?>

<html lang="en" dir="ltr">
  <body>
    <form class="" action="" method="post">
      <input type="text" name="num1" value="" placeholder="Enter First Number"> <br>
      <input type="text" name="num2" value="" placeholder="Enter Second Number"> <br>
      <button type="submit" name="submit">Divide</button>
    </form>
  </body>
</html>
