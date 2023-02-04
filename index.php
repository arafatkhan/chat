<?php

function is_prime($num) {
  if ($num <= 1) {
    return false;
  }
  for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

$counter = 0;
$row_sum = 0;

for ($i = 1; $i <= 1000; $i++) {
  if (is_prime($i)) {
    echo $i . " ";
    $counter++;
    $row_sum += $i;
    if ($counter % 3 == 0) {
      echo $row_sum . "\n";
      $row_sum = 0;
    }
  }
}

?>
