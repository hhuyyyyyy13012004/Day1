<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate the taxi fare</title>
</head>
<body>
    <h1>Calculate the taxi fare</h1>

    <form method="post" action="">
        <label for="km">Input km number:</label>
        <input type="number" name="numberKm" id="km" required min="0" step="0.1">
        <input type="submit" name="btnSubmit" value="Calculate">
    </form>

<?php

const FIRST_LEVEL = 15000;
const SECOND_LEVEL = 12000;
const THIRD_LEVEL = 9000;
const FOURTH_LEVEL = 12 / 100;

if (isset($_POST['btnSubmit'])) {
    $numberKm = floatval($_POST['numberKm']);
    $amount = 0;

    if ($numberKm <= 1) {
        $amount = $numberKm * FIRST_LEVEL;
    } else if ($numberKm <= 5) {
        $amount = 1 * FIRST_LEVEL + ($numberKm - 1) * SECOND_LEVEL;
    } else if ($numberKm <= 140) {
        $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL + ($numberKm - 5) * THIRD_LEVEL;
    } else {
        $amount = (1 * FIRST_LEVEL + 4 * SECOND_LEVEL + ($numberKm - 5) * THIRD_LEVEL);
        $amount = $amount * (1 - FOURTH_LEVEL);
    }

    $amountFormatted = number_format($amount, 0, ',', '.');
    echo "<h2>Total fare for $numberKm km: $amountFormatted đ</h2>";
}
?>
</body>
</html>
