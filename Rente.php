<?php

if (isset($_POST["submit"])) {
    $inleg = $_POST["inleg"];
    $rente = $_POST["rente"];
    $keuze = $_POST["keuze"];
}

?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css?=v061020221631">
    <title>Rente berekenen</title>
</head>
<body>
    <nav>
        <a href="./index.php">Hoofdstuk 2</a>
        <a href="./Hoofdstuk%203.php">Hoofdstuk 3</a>
        <a href="./Pizza.php">Pizza</a>
        <a href="./Rente.php">Rente</a>
    </nav>

    <form>
        <div>
            Ingelegd bedrag: <input type="number" id="inleg" name="inleg" placeholder="Vul een getal in" value="" required minlength="1" maxlength="1000">
        </div>

        <div>
            Rentepercentage: <input type="number" id="rente" name="rente" placeholder="Vul een getal in" value="" required minlength="1" maxlength="1000">
        </div>

        <div>
            <input type="radio" name="keuze" id="tienJaar" value="tienJaar" required>
            <label for="tienJaar">Eindbedrag na 10 jaar</label>
        </div>

        <div>
            <input type="radio" name="keuze" id="verdubbeling" value="verdubbeling" required>
            <label for="verdubbeling">Eindbedrag verdubbeld</label>
        </div>

        <div>
            <input type="submit" name="submit" value="Bereken">
        </div>
    </form>



</body>
</html>