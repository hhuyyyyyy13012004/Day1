<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Count Vowels</title>
</head>
<body>
    <h2>Count Vowels in String</h2>
    <form method="POST">
        Enter string: <input type="text" name="str">
        <input type="submit" value="Count">
    </form>
    <?php
    if (isset($_POST['str'])) {
        $str = strtolower($_POST['str']);
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $vowels)) {
                $count++;
            }
        }
        echo "Number of vowels: $count";
    }
    ?>
</body>
</html>
