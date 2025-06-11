<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
    <!-- php is case sensitive -->
    <h1>This is the process page, get out</h1>
    <?php
    echo $_POST['username'];
    echo "<br>";
    echo $_POST; //Array starting at index 0 as in all programming languages

    var_dump($_POST); // Array with keys and values
    echo "<br>";
    print_r($_POST); // Array with keys and values in a readable format
    echo "<br>";


    echo $_POST['username'] . "<br>";
    //echo $_POST['password'] ;die();  die() or exit()  will stop the execution of the script, so the rest of the code will not be executed
   


    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa unde eveniet debitis ullam saepe enim provident soluta! Sapiente, explicabo sunt.</p>
</body>
</html>