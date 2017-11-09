<?php
  echo "1. ";
  // Define a function greet() that prints a message "Hello World"

  // Write your code below
  function greet() {
    print "Hello World";
  }

  greet();
?>

<?php
  echo "2. ";
  // Define a function customized_greet() that takes a person's name as an argument, 
  // and prints a personalized message, such as "Hello, Alice!"
  // Print "Hello, {your name}"

  // Write your code below
  function customized_greet($name) {
    print "Hello, $name";
  }

  customized_greet('Young Eun');
?>

<?php
  echo "3. ";
  // Define a function get_age() that take a person's birth year as an argument, 
  // and prints messages, such as "Age: 21"
  
  // Write your code below
  function get_age($birth_year) {
    print "Age: ".(2017-$birth_year);
  }

  get_age(2000);
?>

<?php
  echo "4. ";
  // Define a function is_legal_to_drink() that takes a person's age as an argument, 
  // and prints either "Legal" or "Illegal"
  // Find out if it's legal for a person born in the year of 1997 to drink or not
  
  // Write your code below
  function is_legal_to_drink($birth_year) {
    if (2017-$birth_year > 21) {
      print "Legal";
    } else {
      print "Illegal";
    }
  }

  is_legal_to_drink(1997);
?>

<?php
  echo "5. ";
  // Write a script to print the following lines

  /*
    Hello, Alice!
    When you are 14, it is illegal for you to drink.
    When you are 15, it is illegal for you to drink.
    When you are 16, it is illegal for you to drink.
    ...
    When you are 20, it is illegal for you to drink.
    When you are 21, it becomes legal for you to drink.
    When you are 22, it is legal for you to drink.
    ... 
    When you are 25, it is legal for you to drink.
  */

  // Write your code below
  for ($age=14; $age<=25; $age++) {
    echo "When you are $age, it ";
    if ($age < 21) {
      echo "is illegal";
    } else if ($age == 21) {
      echo "becomes legal";
    } else {
      echo "is legal";
    }

    echo " for you do drink.\n";
  }
?>

<?php
  echo "\n";
?>