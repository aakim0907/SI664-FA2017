<?php
  echo '1.';
  // Define a variable "name" to store the name "Alice", 
  // and print "Hi Alice" using stored variable and string concatenation

  // write your code below

?>

<?php
  echo '2.';
  // Define a variable "birth_year" to store Alice's birth year, 2000.
  // Use $name and $birth_year to print "Alice will be 20 years old in 2020"

  // write your code below

?>

<?php
  echo '3.';
  // Use $birth_year in a condition statement: 
  // if Alice is old enough to drink, print "Alice may drink", 
  // otherwise print "Alice may not drink"

  // write your code below

?>

<?php
  echo '4.';
  // Rewrite exercise 4 using ternary operator

  // write your code below

?>

<?php
  echo '5.';
  // Print the position of the letter 'i' in Alice's name

  // write your code below

?>

<?php
  echo '6.';
  // If Alice's name is less than 4 letters, print "short"
  // If Alice's name is longer than 7 letters, print "long"
  // In other cases, print "medium"
  // (use the strlen(string) function)

  // write your code below

?>

<?php
  echo '7.';
  // There are 10 apples in a basket and you eat one every day
  // Until you have less than 3 apples, decrement the number of apples by one and print "Enough apples"
  // If you have less than 3 apples, print "Need to buy more apples!"
  // (use while loop)
  
  // write your code below
  $basket = 10;

?>

<?php
  echo '8.';
  // Print the numbers 20, 21, ..., 29 using a for loop

  // write your code below

?>

<?php
  echo '9.';
  // Looping from 1 to 10, print only the even numbers 
  // (use continue)

  // write your code below

?>

<?php
  echo '10.';
  // Define an array "myarray" consisting of elements "SI664", "Chuck", "Young Eun"
  // Print the size/length of $myarray

  // write your code below

?>

<?php
  echo '11.';
  // Use print_r and var_dump to inspect $myarray
  // Discuss the differences between print_r and var_dump with your pair

  // write your code below

?>

<?php
  echo '12.';
  // Define "newarray" and give each element a key:
  // "course" for "SI664", "instructor" for "Chuck", "gsi" for "Young Eun"
  // Print "Chuck"

  // write your code below

?>

<?php
  echo '13.';
  // Loop through $newarray to print all key value pairs producing results like:
  /* course = SI664
     instructor = Chuck
     gsi = Young Eun */
  // (use foreach)

  // write your code below

?>

<?php
  echo '14.';
  // If key "room" exists in $thisarray, print "Room is assigned"
  // otherwise, print "Room needs to be assigned"
  // (use array_key_exists)
  
  // write your code below
  $thisarray = array("course" => "SI664", "instructor" => "Chuck", "gsi" => "Young Eun", "room" => null);

?>

<?php
  echo '15.';
  // Rewrite exercise 14 using ternary and isset
  // Discuss the difference between isset and array_key_exists with your pair
  // What's wrong with exercise 14?

  // write your code below

?> 

<?php
  echo '16.';
  // Sort $grades so that the key-value pairs are in the order of:
  /* Alice 75
     Bob 90
     Charlie 80 */
  $grades = array("Bob" => 90, "Alice" => 75, "Charlie" => 80);

  // write your code below

?>

<?php
  echo '17.';
  // Sort $grades so that the key-value pairs are in the order of:
  /* Alice 75
     Charlie 80
     Bob 90 */

  // write your code below

?>

<?php
  echo '18.';
  // Given $users array, compute the average of balances of all users and print out the result
  $users = array(
    array("name" => "Devin", "id" => 101, "balance" => 502.91),
    array("name" => "Emily", "id" => 102, "balance" => 2530.22),
    array("name" => "Fred", "id" => 201, "balance" => 124.94)
  );

  // uncomment code below and complete it
  
  // $sum = 0;
  // foreach() {

  // }
  // $average = $sum / ;
  // echo $average;

?>

<?php
  // 19.
  // Given the url http://localhost/index.php?name=Alice&id=101&zipcode=48109,
  // what's the output of print_r($_GET)?

  // write your answer in comments below
  // (you may also create a new array resembing $_GET)

?>

<?php
  // 20.
  // If both "name" and "zipcode" are set in $_GET, print the following message:
  // "Hello Alice, your zipcode is 48109"
  
  // write your answer in comments below

?>
