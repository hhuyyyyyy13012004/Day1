<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Circle Area</title>
</head>
<body>
    <h2>Calculate Area of Circle</h2>
    <form method="POST">
        Enter radius: <input type="number" step="0.01" name="r">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if (isset($_POST['r'])) {
        $r = $_POST['r'];
        $area = 3.14 * $r * $r;
        echo "Area of circle with radius $r is: $area";
    }
    ?>
</body>
</html>
