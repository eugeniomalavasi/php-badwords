<?php
$censored_word = $_GET["censored"];
$text = $_GET["input_text"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/general.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <title>result page</title>
</head>

<body>
    <div class="container">
        <h2>paragrafo originale</h2>
        <p>
            <?php
            echo $text;
            ?>
        </p>
        <p>
            <?php
            echo 'il testo inserito è lungo: ' . strlen($text) . ' caratteri';
            ?>
        </p>
        <h2>paragrafo censurato</h2>
        <p>
            <?php
            $result_text = str_replace($censored_word, "***", $text);
            echo $result_text;
            ?>
        </p>
        <p>
            <?php
            echo strlen($result_text);
            ?>
        </p>
        <form action="index.php">
            <button type="submit">torna alla home</button>
        </form>
    </div>

</body>

</html>