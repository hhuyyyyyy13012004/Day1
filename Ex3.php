<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
    <h2>Calculate Factorial</h2>
    <form method="POST">
        Enter number: <input type="number" name="n">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        echo "Factorial of $n is: $factorial";
    }
    ?>
</body>
</html>
