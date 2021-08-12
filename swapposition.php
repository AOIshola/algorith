<?php
  if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $len = strlen($str);
    for ($i= 0; $i <= $len - 1 ; $i++) {
      echo $str[$i];
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
      <input type="text" name="str" value="" placeholder="Enter String Here"><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
