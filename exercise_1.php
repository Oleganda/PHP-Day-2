<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php


    //Exercise 1
    //Create a function which takes two integer parameters - divide them and output the result on the screen.

    function devider($num1, $num2)
    {
        $devide = $num1 / $num2;
        echo "<p>If you devide {$num1} and {$num2} the result will be:" . " " . floor($devide) . "</p>";
    }
    devider(4, 2);

    //Exercise 2
    //Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. 
    //Then make the calculation and print them on the screen. 

    function sumGrades($num1, $num2, $num3)
    {
        $totalGrade = $num1 + $num2 + $num3;
        echo "<p>Your total grade is: " . $totalGrade . "</p>";
        $averageGrade = $totalGrade / 10;
        echo "<p>Your average grade is: " . $averageGrade . "</p>";
    }
    sumGrades(3, 4, 5);

    //Exercise 3
    //Create a function that calculates the area and volume of a box using return statement.

    function boxVolumeArea($width, $height, $depth)
    {
        $area = $width * $height;
        echo "The area of the box is: " . $area . "<br>";
        $volume = $width * $height * $depth;
        echo "The volume of the box is: " . $volume . "<br>";
        return [$area, $volume];
    }
    $returned_value = boxVolumeArea(3, 2, 6);

    // Exercise 4
    // Create a function that will return the number of minutes, in hours and minutes.
    // The function should accept only one argument.

    function hoursInMinutes($min)
    {
        $hour = $min / 60;
        $min = $min % 60;
        echo "200 minutes = " . floor($hour) . " " . "hour(s) and " . $min . " " . "minute(s)." . "<br>";
        return [$hour, $min];
    }
    $returned_value = hoursInMinutes(200);
    ?>

    <!--Exercise 5
    Create a form with input fields for your firstname, lastname and age.
    Extract the values from each input field and display them all in a separate div. Use the POST method. -->

    <h1 class='d-flex justify-content-center'>About Me</h1>
    <form method='POST'>
        <div class='row'>
            <div class='col'>
                <input type='text' class='form-control' placeholder='First name' name='firstName'>
            </div>
            <div class='col'>
                <input type='text' class='form-control' placeholder='Last name' name='lastName'>
            </div>
            <div class='col'>
                <input type='text' class='form-control' placeholder='Age' name='age'>
            </div>
            <div class='col'>
                <input type='text' class='form-control' placeholder='Hobby' name='hobby'>
            </div>
            <div class='col'>
                <button input type='submit' name="submit" class='btn btn-info'> Submit </button>
            </div>
            <div class='d-flex justify-content-center mt-5'> <button a href='exercise_1.php' class='btn btn-info m-75'>Reset</a></button>
            </div>
        </div>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        if (strlen($_POST['firstName'] < 3) || ($_POST['lastName'] < 3))
            echo "<div class = 'd-flex justify-content-center bg-danger'>Minumum lenght of the name is 3</div>";
        else {
            echo "<div class = 'd-flex justify-content-center'> My Name is " . $_POST['firstName'] . " " . $_POST['lastName'] . " " . "and I am " . " " . $_POST['age'] . " years old </div>";
            echo "<div class = 'd-flex justify-content-center'> My Hobby is " . $_POST['hobby'] . "</div>";
        }
    }
    ?>
</body>

</html>