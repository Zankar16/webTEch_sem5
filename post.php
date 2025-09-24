<?php
if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['operation'])) {
    $x = (float)$_POST['x'];
    $y = (float)$_POST['y'];
    $operation = $_POST['operation'];
    $result = "";

    switch ($operation) {
        case "+":
            $result = $x + $y;
            break;
        case "-":
            $result = $x - $y;
            break;
        case "*":
            $result = $x * $y;
            break;
        case "/":
            $result = $x / $y;
            break;
        default:
            $result = "Invalid operation selected!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>  
<link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div>
        <h2>Calculator (POST Method)</h2>
        <form method="get">
            <input type="number" name="x" step="any" placeholder="Enter Number 1" required><br>
            <input type="number" name="y" step="any" placeholder="Enter Number 2" required><br>
            <select name="operation">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Devision</option>
            </select><br>
            <input type="submit" value="Calculate">
        </form>
        <?php if (isset($result)) { ?>
            <h3>Result: <?php echo $result; ?></h3>
        <?php } ?>
    </div>
</body>
</html>
