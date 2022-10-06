<?php
$naam = '';
$land = '';
if (isset($_POST["submit"])) {
    $naam = $_POST["naam"];
    $land = $_POST["land"];
}

?>
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
    <nav>
        <a href="./index.php">Hoofdstuk 2</a>
        <a href="./Hoofdstuk%203.php">Hoofdstuk 3</a>
        <a href="./Pizza.php">Pizza</a>
        <a href="./Rente.php">Rente</a>
    </nav>

    <form method="post" action="">
        Naam: <input type="text" name="naam" placeholder="Uw naam" value="<?php echo $naam ?>" required><br>
        Land:
        <select name="land">
            <option value="CHOICE">Maak uw keuze</option>
            <option value="NL" <?php if ($land == 'NL') { echo 'selected';} ?>>Nederland</option>
            <option value="DE" <?php if ($land == 'DE') { echo 'selected';} ?>>Duitsland</option>
            <option value="EN" <?php if ($land == 'EN') { echo 'selected';} ?>>Engeland</option>
            <option value="FR" <?php if ($land == 'FR') { echo 'selected';} ?>>Frankrijk</option>
            <option value="ES" <?php if ($land == 'ES') { echo 'selected';} ?>>Spanje</option>
            <option value="IT" <?php if ($land == 'IT') { echo 'selected';} ?>>Italië</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Gegevens versturen">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        switch ($land) {
            case 'NL':
                echo 'Goedemorgen' . ' ' . $naam;
                break;
            case 'DE':
                echo 'Guten morgen' . ' ' . $naam;
                break;
            case 'EN':
                echo 'Good morning' . ' ' . $naam;
                break;
            case 'FR':
                echo 'Bonjour' . ' ' . $naam;
                break;
            case 'ES':
                echo 'Buenos dìas' . ' ' . $naam;
                break;
            case 'IT':
                echo 'Buongiorno' . ' ' . $naam;
                break;
            default:
                echo 'U moet nog een taal kiezen!';
        }
    }
    ?>

</body>
</html>