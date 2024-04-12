<!DOCTYPE html>
<html>

<head>
    <title>Even/Odd Checker</title>
</head>

<body>
    <form method="POST" action="">
        <label for="number">Enter the number:</label><br>
        <input type="text" id="number" name="number"><br>
        <input type="submit" value="Check">
    </form>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the input from the form
        $number = $_POST['number'];
        function checkOddEven($number)
        {
            if ($number % 2 == 0) {
                return "even number";
            } else {
                return "odd number";
            }
        }
        //$number = 13; // Change this number to check different values
        $result = checkOddEven($number);
        echo "The number $number is $result.";
    }
    ?>