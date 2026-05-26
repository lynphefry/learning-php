
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-TRY</title>
      <style>
    body {
      background-color: lightblue;
    }

    h1 {
      color: red;
      text-align: center;
    }
    
  </style>
</head>
<body>
   <h1>LEARNING PHP</h1> 
  
   <?php
   echo "Hello Student!";
    ?> <br>
    <?php
    $name = "phefry";
    echo "My name is " . $name;
    ?>
    <?php
    $price = 100;
    echo "The price is <br> " . $price;
    ?>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" placeholder="Enter your username" name="username">
        <button type="submit" value="Submit">Submit</button>
    </form>

    

    <?php
    $username = $_POST['username'];
    echo"$username"; 
    ?>
    <?php
    $age = 20;
    if($age >= 18) {
        echo "You are an adult.";
    } else {
        echo "You are a minor.";
    }?>





<form action="index.php" method="post">
    Enter Score:
    <input type="number" name="score">
    <input type="submit" value="Check Grade">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $score = $_POST["score"];

    if ($score >= 80) {
        echo "Grade A";
    }

    elseif ($score >= 70) {
        echo "Grade B";
    }

    elseif ($score >= 60) {
        echo "Grade C";
    }

    elseif ($score >= 50) {
        echo "Grade D";
    }

    else {
        echo "Grade E";
    }
}

?>

</body>
</html>