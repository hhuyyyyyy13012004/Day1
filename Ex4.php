<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prime Check</title>
</head>
<body>
    <h2>Check Prime Number</h2>
    <form method="POST">
        Enter number: <input type="number" name="n">
        <input type="submit" value="Check">
    </form>
    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        $isPrime = true;
        if ($n <= 1) $isPrime = false;
        else {
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }
        echo "$n is " . ($isPrime ? "Prime" : "Not Prime");
    }
    ?>
</body>
</html>
