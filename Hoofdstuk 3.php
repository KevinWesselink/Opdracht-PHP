<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoofdstuk 3</title>
</head>
<body>

    <form method="post" action="">
        Naam: <input type="text" name="naam" placeholder="Uw naam" required><br>
        Land:
        <select name="land">
            <option value="NL">Nederland</option>
            <option value="DE">Duitsland</option>
            <option value="EN">Engeland</option>
        </select>
        <br>
        <input type="submit" name="submit" value="gegevens versturen">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $naam = $_POST["naam"];
        $land = $_POST["land"];
        if ($land == 'NL') {
            echo 'Goedemorgen' . $naam;
        }
        elseif ($land == DE) {
            echo 'Guten Morgen' . $naam;
        }
        elseif ($land == EN) {
            echo 'Good morning';
        }
    }
    ?>

</body>
</html>