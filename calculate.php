<?php
  if (isset($_POST['add'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $num1 + $num2;
    echo 'Addition = '. $ans;
  }elseif (isset($_POST['subtract'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $num1 - $num2;
    echo 'Subtraction = '. $ans;
  }elseif (isset($_POST['divide'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $num1 / $num2;
    echo 'Division = '. $ans;
  }else {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $num1 * $num2;
    echo 'Multiplication = '. $ans;
  }

  /*function Add($num1, $num2){
    $_POST['num1'] = $num1;
    $_POST['num2'] = $num2;
    $ans = $num1+$num2;
    return $ans;
  }

  function Subtract($num1, $num2){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $num1-$num2;
    return $ans;
  }

  function Divide($num1, $num2){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $num1/$num2;
    return $ans;
  }

  function Multiply($num1, $num2){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $num1*$num2;
    return $ans;
  }*/
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
      <button type="submit" name="add">ADD</button>
      <button type="submit" name="subtract">SUBTRACT</button>
      <button type="submit" name="divide">DIVIDE</button>
      <button type="submit" name="multiply">MULTIPLY</button>
    </form>
  </body>
</html>
