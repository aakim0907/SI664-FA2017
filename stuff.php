<?php
  $grades = array("Bob" => 90, "Alice" => 75, "Charlie" => 80);
  
  $sorted = ksort($grades);
  
  print_r($sorted);
  print_r($grades);
  
?>