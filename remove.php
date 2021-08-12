<?php
  //remove characted from string using character index
  $str = $_POST['str'];
  $del = $_POST['del'];

  $rstr = substr($str, 0, $del);
  echo $rstr;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="str" value="" placeholder="Enter String"><br>
      <input type="text" name="del" value="" placeholder="Enter character to remove"><br>
      <input type="submit" name="submit" value="Remove">
    </form>
  </body>
</html>
