<!DOCTYPE html>
<html>
<head>
    <title>Reverse and Sum</title>
</head>
<body>
    <h2>Reverse and Sum of a Number</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a number: <input type="text" name="number" pattern="{0-9}">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_number = $_POST["number"];

        function reverseAndSum($number) {
            $reverse = 0;
            $sum = 0;
        
            while ($number != 0) {
                $digit = $number % 10;
                $reverse = $reverse * 10 + $digit;
                $sum += $digit;
                $number = (int)($number / 10);
            }
        
            return array("reverse" => $reverse, "sum" => $sum);
        }

        $result = reverseAndSum($input_number);
        echo "Original number: " . $input_number . "<br>";
        echo "Reversed number: " . $result['reverse'] . "<br>";
        echo "Sum of digits: " . $result['sum'] . "<br>";
    }                                                                                                                                                                
    ?>
</body>
</html>
