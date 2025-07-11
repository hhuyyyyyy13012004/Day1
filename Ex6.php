<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Triangle Perimeter</title>
</head>
<body>
    <h2>Calculate Triangle Perimeter</h2>
    <form method="POST">
        Side a: <input type="number" name="a"><br>
        Side b: <input type="number" name="b"><br>
        Side c: <input type="number" name="c"><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $perimeter = $a + $b + $c;
        echo "Perimeter of triangle: $perimeter";
    }
    ?>
</body>
</html>
