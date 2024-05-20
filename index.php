<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/general.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <form action="result.php" method="get">
            <div>
                <label for="censored-word">inserisci la parola da censurare:</label>
                <input type="text" name="censored" id="censored-word">
            </div>

            <div>
                <label for="text-input">inserisci il testo:</label>
                <textarea name="input_text" id="text-input"></textarea>
            </div>

            <button type="submit"> invia </button>
        </form>
    </div>
</body>

</html>