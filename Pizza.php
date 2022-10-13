<?php
$name = '';
$address = '';
$postcode = '';
$location = '';
$dayOfTheWeek = date("w");
if ($dayOfTheWeek == 4) {
    echo "goed";
}
else {
    echo "fout";
}
$orderDate = date("l/d/m/Y");
if ($orderDate == "Monday") {
    echo "Het is maandag";
}
else {
    echo "Het is niet maandag";
}
echo $orderDate;
$deliveryMethod = '';
$numberOfPizza1 = 0;
$numberOfPizza2 = 0;
$numberOfPizza3 = 0;
$numberOfPizza4 = 0;
$numberOfPizza5 = 0;
$pizzaPriceMonday = 7.50;
$orderCosts = 5;
$pizza = array (
        array("Pizza Margherita", 12.50, $numberOfPizza1),
        array("Pizza Funghi", 12.50, $numberOfPizza2),
        array("Pizza Marina", 13.95, $numberOfPizza3),
        array("Pizza Hawai", 11.50, $numberOfPizza4),
        array("Pizza Quattro Formaggi", 14.50, $numberOfPizza5)
);

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];
    $location = $_POST["location"];
    $deliveryMethod = $_POST["deliveryMethod"];
    $pizza1 = $_POST["numberOfPizza1"];
    $pizza2 = $_POST["numberOfPizza2"];
    $pizza3 = $_POST["numberOfPizza3"];
    $pizza4 = $_POST["numberOfPizza4"];
    $pizza5 = $_POST["numberOfPizza5"];

    $pizza[0][2] = $pizza1;
    $pizza[1][2] = $pizza2;
    $pizza[2][2] = $pizza3;
    $pizza[3][2] = $pizza4;
    $pizza[4][2] = $pizza5;
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
    <title>Kevin's pizzaria</title>
</head>
<body>
    <nav>
        <a href="./index.php">Hoofdstuk 2</a>
        <a href="./Hoofdstuk%203.php">Hoofdstuk 3</a>
        <a href="./Pizza.php">Pizza</a>
        <a href="./Rente.php">Rente</a>
    </nav>

    <div class="Navbar">
        Header
    </div>

    <div class="Content">
        <form method="post" action="">
            Naam: <input type="text" name="name" placeholder="Voornaam en achternaam" value="<?php echo $name?>" required minlength="2" maxlength="50"><br>

            Adres: <input type="text" name="address" placeholder="Adres" value="<?php echo $address?>" required minlength="2" maxlength="50"><br>

            Postcode: <input type="text" name="postcode" placeholder="Postcode" value="<?php echo $postcode?>" required min="6" maxlength="7"><br>

            Plaats: <input type="text" name="location" placeholder="Plaats" value="<?php echo $location?>" required minlength="2" maxlength="20"><br>

            Pizza's (20 stuks max.): <br>
            <table>
                <tr>
                    <th>Pizza naam</th>
                    <th>Pizza prijs</th>
                    <th>Aantal bestelde pizza's</th>
                </tr>
                <tr>
                    <td><?php echo $pizza[0][0];?></td>
                    <td><?php echo $pizza[0][1];?></td>
                    <td><input type="number" id="$numberOfPizza1" name="numberOfPizza1" placeholder="0" value="<?php echo $pizza[0][2];?>" minlength="0" maxlength="20"></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[1][0];?></td>
                    <td><?php echo $pizza[1][1];?></td>
                    <td><input type="number" id="$numberOfPizza2" name="numberOfPizza2" placeholder="0" value="<?php echo $pizza[1][2];?>" minlength="0" maxlength="20"></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[2][0];?></td>
                    <td><?php echo $pizza[2][1];?></td>
                    <td><input type="number" id="$numberOfPizza3" name="numberOfPizza3" placeholder="0" value="<?php echo $pizza[2][2];?>" minlength="0" maxlength="20"></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[3][0];?></td>
                    <td><?php echo $pizza[3][1];?></td>
                    <td><input type="number" id="$numberOfPizza4" name="numberOfPizza4" placeholder="0" value="<?php echo $pizza[3][2];?>" minlength="0" maxlength="20"></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[4][0];?></td>
                    <td><?php echo $pizza[4][1];?></td>
                    <td><input type="number" id="$numberOfPizza5" name="numberOfPizza5" placeholder="0" value="<?php echo $pizza[4][2];?>" minlength="0" maxlength="20"></td>
                </tr>
            </table>

            Bezorgen of ophalen:
            <input type="radio" id="bezorgen" name="deliveryMethod" value="<?php echo "bezorgen"?>" required>
            <label for="bezorgen">Bezorgen</label>
            <input type="radio" id="ophalen" name="deliveryMethod" value="<?php echo "ophalen"?>" required>
            <label for="ophalen">Ophalen</label><br>

            <input type="submit" name="submit" value="Bestelling plaatsen">
        </form>

    </div>
</body>
</html>

<?php
switch ($deliveryMethod) {
        case "bezorgen":
            echo "Naam: " . $name . ".\n";
            echo "Adres: " . $address . ".\n";
            echo "Postcode: " . $postcode . " " . $location . ".\n";
            echo "Bestelling geplaatst op: " . $orderDate . ".\n";
            echo "Bestelmethode: 'Bezorgen'.\n";
            echo "Bestelde pizza('s): \n";
            ?>
            <table>
                <tr>
                    <th>Pizza naam</th>
                    <th>Pizza Prijs</th>
                    <th>Aantal bestelde pizza('s)</th>
                    <th>Totaalprijs pizza('s)</th>
                </tr>
                <tr>
                    <td><?php echo $pizza[0][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                        echo $pizza[0][1] = 7.50;
                        } else {
                        echo $pizza[0][1] = 12.50;
                        }?></td>
                    <td><?php echo $pizza[0][2];?></td>
                    <td><?php echo $pizza[0][2] * $pizza[0][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[1][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[1][1] = 7.50;
                        } else {
                            echo $pizza[1][1] = 12.50;
                        }?></td>
                    <td><?php echo $pizza[1][2]?></td>
                    <td><?php echo $pizza[1][2] * $pizza[1][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[2][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[2][1] = 7.50;
                        } else {
                            echo $pizza[2][1] = 13.95;
                        }?></td>
                    <td><?php echo $pizza[2][2]?></td>
                    <td><?php echo $pizza[2][2] * $pizza[2][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[3][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[3][1] = 7.50;
                        } else {
                            echo $pizza[3][1] = 11.50;
                        }?></td>
                    <td><?php echo $pizza[3][2]?></td>
                    <td><?php echo $pizza[3][2] * $pizza[3][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[4][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[4][1] = 7.50;
                        } else {
                            echo $pizza[4][1] = 14.50;
                        }?></td>
                    <td><?php echo $pizza[4][2]?></td>
                    <td><?php echo $pizza[4][2] * $pizza[4][1];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Kosten (excl. bezorgkosten)</td>
                    <td><?php $pizzaPriceTotal = ($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1]);
                        if ($dayOfTheWeek == 4) {
                        if ($pizzaPriceTotal >= 20) {
                            $pizzaPriceTotal = (($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1])) *0.85;
                            echo $pizzaPriceTotal . " (U heeft 15% korting.)";
                        }
                        else {
                            echo $pizzaPriceTotal;
                        }
                    }?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Bezorgkosten</td>
                    <td><?php echo $orderCosts?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Totaalprijs</td>
                    <td>
                        <?php echo $pizzaPriceTotal + $orderCosts;?>
                    </td>
                </tr>
            </table>
            <?php
            break;

        case "ophalen":
            echo "Naam: " . $name . ". \n";
            echo "Adres: " . $address . ".\n";
            echo "Postcode: " . $postcode . " " . $location . ".\n";
            echo "Bestelling geplaatst op: " . $orderDate . ".\n";
            echo "Bestelmethode: 'Ophalen'.\n";
            echo "Bestelde pizza('s): " . $pizza1 . ".\n";
            ?>
            <table>
                <tr>
                    <th>Pizza naam</th>
                    <th>Pizza Prijs</th>
                    <th>Aantal bestelde pizza('s)</th>
                    <th>Totaalprijs pizza('s)</th>
                </tr>
                <tr>
                    <td><?php echo $pizza[0][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[0][1] = 7.50;
                        } else {
                            echo $pizza[0][1] = 12.50;
                        }?></td>
                    <td><?php echo $pizza[0][2];?></td>
                    <td><?php echo $pizza[0][2] * $pizza[0][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[1][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[1][1] = 7.50;
                        } else {
                            echo $pizza[1][1] = 12.50;
                        }?></td>
                    <td><?php echo $pizza[1][2]?></td>
                    <td><?php echo $pizza[1][2] * $pizza[1][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[2][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[2][1] = 7.50;
                        } else {
                            echo $pizza[2][1] = 13.95;
                        }?></td>
                    <td><?php echo $pizza[2][2]?></td>
                    <td><?php echo $pizza[2][2] * $pizza[2][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[3][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[3][1] = 7.50;
                        } else {
                            echo $pizza[3][1] = 11.50;
                        }?></td>
                    <td><?php echo $pizza[3][2]?></td>
                    <td><?php echo $pizza[3][2] * $pizza[3][1];?></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[4][0];?></td>
                    <td><?php if ($dayOfTheWeek == "1") {
                            echo $pizza[4][1] = 7.50;
                        } else {
                            echo $pizza[4][1] = 14.50;
                        }?></td>
                    <td><?php echo $pizza[4][2]?></td>
                    <td><?php echo $pizza[4][2] * $pizza[4][1];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Totaalprijs</td>
                    <td><?php $pizzaPriceTotal = ($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1]);
                        if ($dayOfTheWeek == 4) {
                            if ($pizzaPriceTotal >= 20) {
                                $pizzaPriceTotal = (($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1])) *0.85;
                                echo $pizzaPriceTotal . " (U heeft 15% korting.)";
                            }
                            else {
                                echo $pizzaPriceTotal;
                            }
                        }?></td>
                </tr>
            </table>
            <?php
            break;
}
?>


<!--echo (($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1])) * 0.85;-->
<!--} else {-->
<!--echo ($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1])-->
<!--}-->
