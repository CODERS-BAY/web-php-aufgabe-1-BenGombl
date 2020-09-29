<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 - 6</title>
</head>

<body>
    <article>
        <?php
        $price = 0;
        switch ($_POST["fuel"]) {
            case "N":
            case "n":
            case "normal":
            case "Normal":
            case "NORMAL":
                $price = 1.35;
                $fuel = "Normal";
                break;
            case "S":
            case "s":
            case "super":
            case "Super":
            case "SUPER":
                $price = 1.4;
                $fuel = "Super";
                break;
            case "D":
            case "d":
            case "diesel":
            case "Diesel":
            case "DIESEL":
                $price = 1.1;
                $fuel = "Diesel";
        }

        if (!$price) {
            echo ($_POST["fuel"] . "is not a valid fuel-type");
        } else if ($_POST["liter"] < 100) {
            echo ($_POST["liter"] . " Liter " . $fuel . ": " . number_format($price * $_POST["liter"], 2) . "&euro;");
        } else {
            echo ($_POST["liter"] . " Liter " . $fuel . ": " . number_format($price * $_POST["liter"] * 0.98, 2) . "&euro;");
        }


        ?>
        </br>

        <a href="index.php">back</a>
    </article>
</body>

</html>