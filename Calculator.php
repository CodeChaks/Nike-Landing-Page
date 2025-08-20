<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
   <!-- <h1>Simple Calculator</h1>-->
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
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
        // Getting input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
        // Perform calculation
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = 'Error: Division by zero is not allowed.';
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = 'Invalid operator';
                break;
        }

        // Display the result
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
