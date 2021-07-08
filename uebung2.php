<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>

<body>
    <article>
        <p class = "score">
            <?php
            echo ($_POST["number"] * $_POST["number"]);
            ?>
        </p>
        </br>
        <a href="index.php">back</a>
    </article>
</body>

</html>