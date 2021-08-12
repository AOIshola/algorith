<?php
  $str = "I want to get a good paying job";
  $sep = " ";
  $len = strlen($str);
  for ($i = $len - 1; $i >= 0 ; $i--) {
    if ($str[$i] == " ") {
      $sep = $len - 1;
      $len = $i - 1;
      $sep.append($str.substr($i + 1, $sep));
      $sep.append(" ");
    }
  }
  $sep.append($str.substr(0, $len + 1));
?>
