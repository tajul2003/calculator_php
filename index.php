<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        form {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, select, button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Calculator</h1>
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = "";

        if ($operation == "add") {
            $result = $num1 + $num2;
        } elseif ($operation == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operation == "divide") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero is not allowed.";
            }
        }

        echo "<div class='result'>Result: $result</div>";
    }
    ?>
</body>
</html>
