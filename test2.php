<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <h1>Hello</h1>
    <form action="" method="post">
        <div>
            <label for="name">Name:</label>
            <input name="name" id="name">
            <input type="submit" name="btnSend" value="Send"/>
        </div>
    </form>
    <?php
    if (isset($_POST['btnSend'])) {
        $name = $_POST['name'];
        ?>
        <h2>Welcome <?php echo $name; ?></h2>
        <?php
        header("Location: test.php");
    }
    ?>
</body>
</html>
