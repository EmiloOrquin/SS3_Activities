<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
$bmi = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = (float)$_POST['weight'];
    $height = (float)$_POST['height'];

    if ($weight > 0 && $height > 0) {
        $bmi = round($weight / ($height * $height), 1);

        if ($bmi < 18.5) {
            $message = "Underweight";
        } elseif ($bmi < 24.9) {
            $message = "Normal weight";
        } elseif ($bmi < 29.9) {
            $message = "Overweight";
        } else {
            $message = "Obese";
        }
    } else {
        $message = "Please enter valid positive numbers.";
    }
}
?>
    <h2>BMI Calculator</h2>
    <form method="post">
        Weight (kg): <input type="number" step="0.1" name="weight" required><br><br>
        Height (m): <input type="number" step="0.01" name="height" required><br><br>
        <input type="submit" value="Calculate BMI">
    </form>

    <?php if ($bmi): ?>
        <h3>Your BMI: <?php echo $bmi; ?></h3>
        <p>Category: <?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>
