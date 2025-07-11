<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fibonacci Sequence</title>
</head>
<body>
    <h2>Fibonacci Sequence</h2>
    <form method="POST">
        Enter n terms: <input type="number" name="n">
        <input type="submit" value="Generate">
    </form>
    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        $a = 0;
        $b = 1;
        echo "Fibonacci sequence: ";
        for ($i = 0; $i < $n; $i++) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }
    }
    ?>
</body>
</html>
