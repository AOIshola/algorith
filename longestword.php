<?php
  function findLongestWord($str){
    $words = explode(' ', $str);
    $maxLength = 0;
    $len = count($words);
    for ($i=0; $i < $len ; $i++) {
      if (strlen($words[$i]) > $maxLength) {
        $maxLength = strlen($words[$i]);
      }
    }
    echo 'The ' .$i.'th word is longest';
    return $maxLength;
  }
  findLongestWord('I am going tomorrow');
?>
