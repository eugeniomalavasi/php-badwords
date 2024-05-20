<?php
$censored_word = $_GET["censored"];
$text = $_GET["input_text"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result page</title>
</head>

<body>
    <h2>paragrafo originale</h2>
    <p>
        <?php
        echo $text;
        echo 'il testo inserito è lungo: ' . strlen($text) . ' caratteri';
        ?>
    </p>

    <form action="index.php">
        <button type="sumbmit">torna alla home</button>
    </form>

</body>

</html>