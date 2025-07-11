<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Celsius to Fahrenheit</title>
</head>
<body>
    <h2>Convert Celsius to Fahrenheit</h2>
    <form method="POST">
        Enter Celsius: <input type="number" name="celsius">
        <input type="submit" value="Convert">
    </form>
    <?php
    if (isset($_POST['celsius'])) {
        $c = $_POST['celsius'];
        $f = ($c * 9 / 5) + 32;
        echo "$c &deg;C = $f &deg;F";
    }
    ?>
</body>
</html>
