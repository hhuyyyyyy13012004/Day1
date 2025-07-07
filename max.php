<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số lớn nhất</title>
</head>
<body>
    <?php
    $result = "";
    if (isset($_POST['btnSubmit'])) {
        $numbers = $_POST['numbers'];
        $list = explode(',', $numbers);
        $max = intval($list[0]);

        for ($i = 1; $i < count($list); $i++) {
            if ($max < intval($list[$i])) {
                $max = intval($list[$i]);
            }
        }

        $result = "Số lớn nhất là: " . $max;
    }
    ?>
    <h1>Tìm số lớn nhất</h1>
    <form action="" method="post">
        <div>
            <label for="numbers">Nhập chuỗi số (cách nhau bằng dấu phẩy):</label><br>
            <input type="text" name="numbers" id="numbers" required>
        </div>
        <br>
        <div>
            <input type="submit" name="btnSubmit" value="Tìm số lớn nhất"/>
        </div>
    </form>

    <?php if ($result): ?>
        <h2><?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
