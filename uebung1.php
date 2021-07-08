<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>

<body>
    <article>
        <?php
        $price1 = 22.5;
        $price2 = 12.3;
        $price3 = 5.2;

        $article1 = $_POST["article1"];
        $article2 = $_POST["article2"];
        $article3 = $_POST["article3"];

        echo ("$article1 x Article 1: " . number_format($article1 * $price1, 2, ',', '.') . " € </br>");
        echo ("$article2 x Article 2: " . number_format($article2 * $price2, 2, ',', '.') . " € </br>");
        echo ("$article3 x Article 3: " . number_format($article3 * $price3, 2, ',', '.') . " € </br>");
        echo ("----------------------------------------------------</br>");
        echo ("TOTAL: " . number_format(($article1 * $price1 + $article2 * $price2 + $article3 * $price3), 2, ',', '.') . " &euro; + " . number_format(($article1 * $price1 + $article2 * $price2 + $article3 * $price3) * 0.2, 2, ',', '.') . " &euro; UST = <span class = 'result'>" . number_format(($article1 * $price1 + $article2 * $price2 + $article3 * $price3) * 1.2, 2, ',', '.') . " &euro;</span>");
        ?>
        </br>

        <a href="index.php">back</a>
    </article>
</body>

</html>