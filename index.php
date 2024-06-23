<?php
function reverseDigits($number) {
    // Check if the number is negative
    $isNegative = $number < 0;

    // Convert the number to a string and reverse its characters
    $reversedString = strrev(abs($number));

    // Convert the reversed string back to an integer
    $reversedNumber = (int)($isNegative ? '-' . $reversedString : $reversedString);

    return $reversedNumber;
}

// Initialize variables
$originalNumber = isset($_POST['number']) ? (int)$_POST['number'] : null;
$reversedNumber = null;

if ($originalNumber !== null) {
    $reversedNumber = reverseDigits($originalNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Reverse Digits Program</title>
</head>
<body>
    <div class="container">
        <h2>Reverse Digits Program</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="number">Enter an Integer:</label>
            <input type="number" name="number" required>
            <button type="submit" name="submit">Reverse Digits</button>
        </form>

        <?php
        if ($reversedNumber !== null) {
            echo "<p>Original Number: $originalNumber</p>";
            echo "<p>Reversed Number: $reversedNumber</p>";
        }
        ?>
    </div>
</body>
</html>
