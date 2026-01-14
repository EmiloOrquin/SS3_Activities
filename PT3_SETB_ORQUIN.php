<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CD Discount Calculator</title>
    <style>
        /* Reset some defaults */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f9f9f9, #d9eaf7);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 360px;
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            text-align: left;
            font-weight: 600;
            margin-bottom: 5px;
            color: #34495e;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #bdc3c7;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            font-weight: bold;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .result {
            margin-top: 20px;
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
        }

        .result p {
            margin-bottom: 8px;
            font-size: 16px;
            color: #2c3e50;
        }

        .result strong {
            color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>CD Discount Calculator</h2>

    <form method="post">
        <label for="numCDs">Number of CDs bought:</label>
        <input type="number" name="numCDs" id="numCDs" min="0" required>
        <input type="submit" value="Check Discount">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php
            $numCDs = intval($_POST['numCDs']);
            $discount = 0;

            if ($numCDs >= 120) {
                $discount = 10;
            } elseif ($numCDs >= 50) {
                $discount = 5;
            } elseif ($numCDs >= 15) {
                $discount = 1;
            } else {
                $discount = 0;
            }
        ?>
        <div class="result">
            <p><strong>Number of CDs bought:</strong> <?php echo $numCDs; ?></p>
            <p><strong>Discount:</strong> <?php echo $discount; ?>%</p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
