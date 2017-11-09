<?php
  // Define a variable "name" to store your the name "Alice" 
  // and print "Hi Alice" using the variable and string concatenation
  echo '1.';
  // enter your code
  $name = "Alice";
  echo "Hi ".$name;
  // echo "Hi $name";
?>

<?php
  // Define a variable "birth_year" to store Alice's birth year, 2000.
  // Use $name and $birth_year to print "Alice will be 20 years old in 2020"
  echo '2.';
  // enter your code
  $birth_year = 2000;

  echo "$name will be ".(2020-$birth_year)." years old in 2020";
?>

<?php
  // Use $birth_year to condition statement: 
  // if Alice is old enough to drink, print "Alice may drink", 
  // otherwise print "Alice may not drink"
  echo '3.';
  // enter your code
  if (2018 - $birth_year >= 21) {
    echo "Alice may drink";
  } else {
    echo "Alice may not drink";
  }
?>

<?php
  // Rewrite exercise 4 in ternary
  echo '4.';
  // enter your code
  echo (2018 - $birth_year >= 21) ? "Alice may drink" : "Alice may not drink";
?>

<?php
  // Print the position of the letter 'i' in Alice's name
  echo '5.';
  // enter your code
  echo strpos($name, 'i');
?>

<?php
  // If Alice's name is less than 4 letters, print "short"
  // If Alice's name is longer than 7 letters, print "long"
  // In other cases, print "medium"
  // (use strlen)
  echo '6.';
  // enter your code
  if (strlen($name) > 7) {
    echo "long";
  } elseif (strlen($name) < 4) {
    echo "short";
  } else {
    echo "medium";
  }
?>

<?php
  // There are 10 apples in a basket and you eat one every day. 
  // Until you have less than 3 apples, decrement the number of apples by one and print "Enough apples"
  // If you have less than 3 apples, print "Need to buy more apples!"
  // (use while loop)
  echo '7.';
  $basket = 10;
  // enter your code
  while ($basket >= 3) {
    echo "Enough apples\n";
    $basket--;
  } 
  echo "Need to buy more apples!";
?>

<?php
  // Print the numbers 20, 21, ..., 29 using "for" loop
  echo '8.';
  // enter your code
  for ($x=20; $x<30; $x++) {
    echo $x."\n";
  }
?>

<?php
  // Looping from 1 to 10, print only the even numbers 
  // (use continue)
  echo '9.';
  // enter your code
  for ($x=1; $x<=10; $x++) {
    if ($x % 2 == 0) continue;
    echo $x."\n";
  }
?>

<?php
  // Define an array "myarray" consisting of elements "SI664", "Chuck", "Young Eun"
  // Print the size/length of "myarray"
  echo '10.';
  // enter your code
  $myarray = array("SI664", "Chuck", "Young Eun");
  echo count($myarray);
?>

<?php
  // Use print_r to inspect "myarray"
  // Discuss the differences between print_r and var_dump
  echo '11.';
  // enter your code
  print_r($myarray);
  var_dump($myarray);
?>

<?php
  // Define "newarray" and give each element a key:
  // "course" for "SI664", "instructor" for "Chuck", "gsi" for "Young Eun"
  // Print "Chuck"
  echo '12.';
  // enter your code
  $newarray = array("course" => "SI664", "instructor" => "Chuck", "gsi" => "Young Eun");
  echo $newarray["instructor"];
?>

<?php
  // Loop through "newarray" and print "Key=* Value=*" for all key-value pairs in the array
  echo '13.';
  // enter your code
  foreach($newarray as $k => $v) {
    echo "$k = $v\n";
  }
?>

<?php
  // Print "Room is assigned" if key "room" exists in "newarray", 
  // and "Room needs to be assigned" if it does not exist
  // (use array_key_exists)
  echo '14.';
  $thisarray = array("course" => "SI664", "instructor" => "Chuck", "gsi" => "Young Eun", "room" => null);
  // enter your code
  if (array_key_exists('room', $thisarray)) {
    echo "Room is assigned";
  } else {
    echo "Room needs to be assigned";
  }
?>

<?php
  // Rewrite exercise 14 using ternary and isset
  // Discuss the difference between isset and array_key_exists with your pair
  echo '15.';
  // enter your code
  echo isset($thisarray['room']) ? "Room is assigned" : "Room needs to be assigned";
?>

<?php
  // Sort $grades so that the key-value pairs are in the order of:
  /* Alice 75
     Bob 90
     Charlie 80 */
  echo '16.';
  $grades = array("Bob" => 90, "Alice" => 75, "Charlie" => 80);
  // enter your code
  ksort($grades);
  print_r($grades);
?>

<?php
  // Sort $grades so that the key-value pairs are in the order of:
  /* Alice 75
     Charlie 80
     Bob 90 */
  echo '17.';
  // enter your code
  asort($grades);
  print_r($grades);
?>

<?php
  // Compute the average of balances of all users and print out the result
  echo '18.';
  $users = array(
    array("name" => "Devin", "id" => 101, "balance" => 502.91),
    array("name" => "Emily", "id" => 102, "balance" => 2530.22),
    array("name" => "Fred", "id" => 201, "balance" => 124.94)
  );
  // write your code
  $sum = 0;
  foreach($users as $a) {
    $sum = $sum + $a['balance'];
  }
  $average = $sum / count($users);
  echo $average;
?>

<?php
  // Given the url http://localhost/index.php?name=Alice&id=101&zipcode=48109,
  // what's the output of print_r($_GET)?
  echo '19.';
  // write your answer
  $get = array("name" => "Alice", "id" => 101, "zipcode" => 48109);
  print_r($get);
?>

<?php
  // If both "name" and "zipcode" are set in $_GET, print the following message:
  // "Hello Alice, your zipcode is 48109"
  echo '20.';
  // write your answer
  if (isset($get['name']) && isset($get['zipcode'])) {
    echo "Hello {$get['name']}, your zipcode is {$get['zipcode']}";
  }
?>
