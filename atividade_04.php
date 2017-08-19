<?php
  $A = rand(-100, 100);
  $B = rand(-100, 100);
  echo "A = ", $A, "<br>";
  echo "B = ", $B, "<br>";

  if ($A < $B) {
    echo $A, "&nbsp", $B;
  } else {
    echo $B, "&nbsp", $A;
  }
 ?>
