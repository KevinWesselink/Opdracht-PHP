<?php

$inleg = '';
$rente = '';
$jaar = 1;

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
        <link rel="stylesheet" href="css/style.css?=v281020220920">
        <title>Rente berekenen</title>
    </head>
    <body>
        <nav>
            <a href="./index.php">Hoofdstuk 2</a>
            <a href="./Hoofdstuk%203.php">Hoofdstuk 3</a>
            <a href="./Pizza.php">Pizza</a>
            <a href="./Rente.php">Rente</a>
        </nav>

        <form method="post">
            <div>
                Ingelegd bedrag: <input type="number" id="inleg" name="inleg" placeholder="Vul een getal in" value="<?php echo $inleg?>" required min="1" max="1000">
            </div>

            <div>
                Rentepercentage: <input type="number" id="rente" name="rente" placeholder="Vul een getal in" value="<?php echo $rente?>" required min="1" max="200">
            </div>

            <div>
                <input type="radio" name="keuze" id="tienJaar" value="<?php echo "tienJaar"?>" required>
                <label for="tienJaar">Eindbedrag na 10 jaar</label>
            </div>

            <div>
                <input type="radio" name="keuze" id="verdubbeling" value="<?php echo "verdubbeling"?>" required>
                <label for="verdubbeling">Eindbedrag verdubbeld</label>
            </div>

            <div>
                <input type="submit" name="submit" value="Bereken">
            </div>
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $rente = $rente / 100;
                $metRente = array();

                if ($keuze == "tienJaar") {
                    for ($i = 0; $i < 10; $i++) {
                        $inleg = $inleg * $rente + $inleg;
                        $metRente[] = $inleg;
                    }
                }

                if ($keuze == "verdubbeling") {
                    $inlegDubbel = $inleg * 2;
                    for ($i = 0; $inleg < $inlegDubbel; $i++) {
                        $inleg = $inleg * $rente + $inleg;
                        $metRente[] = $inleg;
                    }
                }

                echo "
                     <table>
                        <tr>
                            <th>Jaar</th>
                            <th>Bedrag</th>
                        </tr>
                ";

                foreach ($metRente as $value) {
                    echo "
                        <tr>
                            <td>" . $jaar . "</td>
                            <td>" . number_format($value,2, ",", ".") . "</td>
                    ";
                    $jaar++;
                    echo "
                        </tr>
                    ";
                }
                echo "</table>";
            }
        ?>
    </body>
</html>