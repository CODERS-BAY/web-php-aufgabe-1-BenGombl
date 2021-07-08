<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Action</title>
</head>

<body class="flex">
    <article>
        <h2>Übung 1</h2>
        <form action="uebung1.php" method="post">
            <label for="article1">Article 1</label>
            <input name="article1" type="number" value="0">
            <label for="article2">Article 2</label>
            <input name="article2" type="number" value="0">
            <label for="article3">Article 3</label>
            <input name="article3" type="number" value="0">
            <button type="submit">buy</button>
        </form>
    </article>


    <article>

        <h2>Übung 2</h2>
        <form action="uebung2.php" method="post">
            <label for="number">Number:</label>
            <input type="number" value="1" name="number">
            <button type="submit">Calculate Square Root</button>
        </form>
    </article>


    <article>
        <h2>Übung3</h2>
        <form action="uebung3.php" method="post">
            <label for="normal">Normal l:</label>
            <input name="normal" type="number" value="0">
            <label for="super">Super l:</label>
            <input name="super" type="number" value="0">
            <button type="submit">refuel</button>

        </form>
    </article>


    <article>
        <h2>Übung 4-6</h2>
        <form action="uebung4.php" method="post">
            <label for="liter">Liter:</label>
            <input value="0" name="liter" type="number">
            <label for="fuel">Sorte:</label>
            <input name="fuel" type="text">
            <button type="submit">refuel</button>
        </form>
    </article>


    <article>
        <h2>Übung 7</h2>
        <p>|
            <?php
            for ($i = 13; $i < 30; $i += 4) {
                echo ($i . " | ");
            }
            ?>
        </p>

        <p>|
            <?php
            for ($i = 2; $i >= -1; $i -= 0.5) {
                echo ($i . " | ");
            }
            ?>
        </p>

        <p>|
            <?php
            for ($i = 2; $i <= 6; $i++) {
                echo (($i * 1000) . " | ");
            }
            ?>
        </p>
        <p>|
            <?php
            for ($i = 5; $i <= 13; $i++) {
                echo ("Z" . $i . " | ");
            }
            ?>
        </p>

        <p>|
            <?php
            for ($i = 1; $i <= 3; $i++) {
                echo ("a | b" . $i . " | ");
            }
            ?>
        </p>

        <p>|
            <?php
            for ($i = 2; $i <= 30; $i += 10) {
                echo ("c" . $i . " | c" . ($i + 1) . " | ");
            }
            ?>
        </p>
        <p>|
            <?php
            for ($i = 13; $i <= 45; $i += 4) {
                if ($i != 25 && $i != 29) {
                    echo ($i . " | ");
                }
            }
            ?>
        </p>
    </article>
    <article>

        <h2>Übung 8</h2>
        <p class="score">


            <?php
            $player1 = 0;
            $player2 = 0;
            echo ($player1 . " : " . $player2 . "</br>");
            while ($player1 < 25 && $player2 < 25) {
                $player1 += rand(1, 6);
                $player2 += rand(1, 6);
                echo ($player1 . " : " . $player2 . "</br>");
            }
            ?>


        </p>
        <p class = "result">
            <?php
            if ($player1 == $player2) {
                echo ("draw");
            } else if ($player1 < $player2) {
                echo ("player 2 wins");
            } else {
                echo ("player 1 wins");
            } ?>
        </p>

    </article>
</body>

</html>