<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Palindrome Check</title>
</head>
<body>
    <h2>Check Palindrome Number</h2>
    <form method="POST">
        Enter number: <input type="number" name="num">
        <input type="submit" value="Check">
    </form>
    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        $rev = strrev($num);
        if ($rev == $num)
            echo "$num is Palindrome";
        else
            echo "$num is Not Palindrome";
    }
    ?>
</body>
</html>
