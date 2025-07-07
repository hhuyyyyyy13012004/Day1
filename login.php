<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php
    if (isset($_POST['btnSend'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        // Kiểm tra tài khoản đơn giản: username = admin, password = 123
        if ($name === 'Hutech' && $password === '123') {
            header("Location: success.php");
            exit();
        } else {
            echo "<h2>Invalid username or password</h2>";
        }
    }
    ?>
    <h1>Login</h1>
    <form action="" method="post">
        <div>
            <label for="name">Username:</label>
            <input name="name" id="name">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" name="btnSend" value="Login"/>
        </div>
    </form>
    
</body>
</html>
