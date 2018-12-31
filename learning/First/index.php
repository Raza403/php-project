<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>First PHP site</title>
</head>

<body>

  <?php
    // Echoing in PHP
    // echo "<h1>Hello</h1>";
    // echo "<hr>";
    // echo "<p>This is my site</p>";

    // // Use of variables
    // $name = "Ahmed";
    // $age = 28;
    // echo "There once was a man named $name <br>";
    // echo "He was $age years old<br>";
    // // Update variable 
    // $name = "Hamid";
    // $age = 23;
    // echo "He really like the name $name<br> But he didn't like to be $age years old";

    // // Data Types in PHP
    $phrase = "Today is 25 dec<br>";
    // $age = 35;
    // $negative_value = -23;
    // $float_int = 3.1415;
    // $bool = true;
    // echo $phrase;
    // echo strtolower($phrase);
    // echo strtoupper($phrase);
    // echo strtoupper("dogs<br>");
    // echo $phrase[0];
    // $phrase[0] = "t";
    // echo "<br>";
    // echo $phrase[0];
    // echo "<br>";
    // echo strlen("Hello");
    // echo "<br>";
    // echo str_replace("today", "Yesterday", $phrase);
    // echo str_replace("to", "Yester", $phrase);
    // echo $phrase;
    // // Just like splice first arg is string, 2nd is starting index and 3rd is stopping index.
    // echo substr ($phrase, 6, 2);
    // echo "<br>";
    // echo crypt($phrase);
    // echo "<br>";

    // Integers
// $num = 10;
// echo $num;
// $num++;
// echo "<br>";
// echo $num;
// echo "<br>";


//     echo 33;
//     echo "<br>";
//     echo -11;
//     echo "<br>";
//     echo 12.23;
//     echo "<br>";
//     echo 5/3;
//     echo "<br>";
//     echo 10%3;
//     echo "<br>";
//     echo (4 + 5) *10;
//     echo "<br>";
// $num = 10;
// $num += 25;
// echo $num;
// $num -= 25;
// echo $num;
// $num *= 25;
// echo $num;
// $num /= 25;
// echo $num;
// Absolute number
// echo abs(-100);
// 2 raise power of 4 = 16
// echo pow(2,4);
// Square root
// echo sqrt(4);
// Compare and tells which one is bigger
// echo max(2, 10);
// Compares and tells which number is smaller
// echo min(2,10);
// Rounding
// echo round(3.7);
// Ceiling will always go up, below will give 4
// echo ceil(3.2);
// Rounding down with floor, this will give 3
// echo floor(3.7);


// Getting input from users

    ?>
    <form action="index.php" method="get">
    Name: <input type="text" name="name">
    Age: <input type="number" name="age">
    <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"]; ?>
    <br>
    Your age is <?php echo $_GET["age"]; ?>
</body>

</html>