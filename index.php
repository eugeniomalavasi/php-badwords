<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="result.php" method="get">
        <label for="censored-word">inserisci la parola da censurare</label>
        <input type="text" name="censored" id="censored-word"> <br>
        <br>
        <label for="text-input">inserisci il testo</label>
        <textarea name="input_text" id="text-input"></textarea>
        <br>
        <br>
        <button type="submit"> invia </button>
    </form>
</body>

</html>