<?php
  if (isset($_GET['num1']) && isset($_GET['num2'])) {
    if (is_numeric($_GET['num1']) && is_numeric($_GET['num2'])) {
      $sum = $_GET['num1'] + $_GET['num2'];  
      $result = "{$_GET['num1']} + {$_GET['num2']} = $sum";
    } else {
      $error = "Input is not valid.";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>A Simple Calculator</title>
  </head>

  <body>

    <form>
      <input type="text" size="4" name="num1" />
	      +
      <input type="text" size="4" name="num2" />
      <input type="submit" value="Compute" />
    </form>

    <p><?php if (isset($result)) echo $result; ?></p>
    <p><?php if (isset($error)) echo $error; ?></p>

  </body>
</html>