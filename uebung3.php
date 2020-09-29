<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>

<body>
    <article>
        <?php
        if ($_POST["normal"]) {
            echo ($_POST["normal"] . "l normal: " . number_format($_POST["normal"] * 1.35, 2) . " &euro;</br>");
        }
        if ($_POST["super"]) {
            echo ($_POST["super"] . "l super: " . number_format($_POST["super"] * 1.40, 2) . " &euro;</br>");
        }

        ?>
        </br>

        <a href="index.php">back</a>
    </article>
</body>

</html>