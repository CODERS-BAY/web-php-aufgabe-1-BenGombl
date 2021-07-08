<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>

<body>
    <article>
        <?php
        $player1 = 0;
        $player2 = 0;
        echo ($player1 . ":" . $player2 . "</br>");
        while ($player1 < 25 && $player2 < 25) {
            $player1 += rand(1, 6);
            $player2 += rand(1, 6);
            echo ($player1 . ":" . $player2 . "</br>");
        }
        if ($player1 == $player2) {
            echo ("draw");
        } else if ($player1 < $player2) {
            echo ("player 2 wins");
        } else {
            echo ("player 1 wins");
        }
        ?>
    </article>
</body>

</html>