<?php
//Multiplication Table
if (isset($_POST['gen'])) {
  $num = $_POST['num'];
  for ($i=1; $i <= 12 ; $i++) {
    echo $num ,"x ". $i. " = ", $num*$i. "<br>";
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
      <input type="text" name="num" value=""><br><br>
      <button type="submit" name="gen">Generate Table</button>
    </form>
  </body>
</html>
