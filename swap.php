<?php
  if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $num1 *= $num2;
    $num2 /= $num1;
    $num1 /= $num2;

    echo "first number = ". $num1. "<br>";
    echo "second number = ". $num2. "<br>";
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
      <input type="text" name="num1" value="">
      <input type="text" name="num2" value="">
      <button type="submit" name="submit">SWAP</button>
    </form>
  </body>
</html>
