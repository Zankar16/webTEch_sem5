<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Enter a Number to See Its Multiplication Table</h2>

<form method="post">
    <label>Enter number: </label>
    <input type="number" name="num" required>
    <input type="submit" value="Show Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST['num']);
    
    echo "<h3>Multiplication Table of $num</h3>";
    echo "<table>";
    echo "<tr><th>$num</th><th>Result</th></tr>";
    
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$num × $i</td><td>" . ($num * $i) . "</td></tr>";
    }
    
    echo "</table>";
}
?>

</body>
</html>
