<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <!-- <h1>Simple Calculator</h1> -->
    <form method="post" action="">
        <input type="number" name="num1" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    // Addition function
    function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Subtraction function
    function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    // Multiplication function
    function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    // Division function
    function divide($num1, $num2) {
        if ($num2 == 0) {
            return 'Error: Division by zero is not allowed.';
        }
        return $num1 / $num2;
    }

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
        // Getting input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
        // Perform calculation based on the operator
        if ($operator == '+') {
            $result = add($num1, $num2);
        } elseif ($operator == '-') {
            $result = subtract($num1, $num2);
        } elseif ($operator == '*') {
            $result = multiply($num1, $num2);
        } elseif ($operator == '/') {
            $result = divide($num1, $num2);
        } else {
            $result = 'Invalid operator';
        }

        // Display the result
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
