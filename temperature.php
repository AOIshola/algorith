<?php
  //convert celsius to Kelvin
  function convertToK($celsius){
    $kelvin = 1;
    $kelvin = $celsius + 273;
    echo 'Celsius to Kelvin = '. $kelvin. '<br>';
  }

  convertToK(20);

  //convert celsius to fahrenheit
  function convertToF($celsius){
    $fahrenheit = 1;
    $fahrenheit = $celsius * (9/5) + 32;
    echo 'Celsius to Fahrenheit = '. $fahrenheit;
  }
  convertToF(2);
?>
