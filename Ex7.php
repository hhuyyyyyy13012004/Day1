<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reverse String</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="POST">
        Enter string: <input type="text" name="str">
        <input type="submit" value="Reverse">
    </form>
    <?php
    if (isset($_POST['str'])) {
        $str = $_POST['str'];
        $rev = '';
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $rev .= $str[$i];
        }
        echo "Reversed string: $rev";
    }
    ?>
</body>
</html>
