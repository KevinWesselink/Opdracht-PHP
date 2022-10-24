<?php
$name = '';
$address = '';
$postcode = '';
$location = '';
$dayOfTheWeek = date("w");
$orderDate = date("l/d/m/Y");
$deliveryMethod = '';
$numberOfPizza1 = "";
$numberOfPizza2 = "";
$numberOfPizza3 = "";
$numberOfPizza4 = "";
$numberOfPizza5 = "";
$orderCosts = 5;
$numberOfPizza1 = 0;
$numberOfPizza2 = 0;
$numberOfPizza3 = 0;
$numberOfPizza4 = 0;
$numberOfPizza5 = 0;
$pizza = array (
        array("Pizza Margherita", 12.50, $numberOfPizza1),
        array("Pizza Funghi", 12.50, $numberOfPizza2),
        array("Pizza Marina", 13.95, $numberOfPizza3),
        array("Pizza Hawai", 11.50, $numberOfPizza4),
        array("Pizza Quattro Formaggi", 14.50, $numberOfPizza5)
);

if ($dayOfTheWeek == "1") {
    $pizza[0][1] = 7.50;
    $pizza[1][1] = 7.50;
    $pizza[2][1] = 7.50;
    $pizza[3][1] = 7.50;
    $pizza[4][1] = 7.50;
}

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
    <link rel="stylesheet" href="css/style.css?=v131020221323">
    <title>Kevin's pizzaria</title>
</head>
<body>
    <nav>
        <a href="./index.php">Hoofdstuk 2</a>
        <a href="./Hoofdstuk%203.php">Hoofdstuk 3</a>
        <a href="./Pizza.php">Pizza</a>
        <a href="./Rente.php">Rente</a>
    </nav>

    <div class="header">
        <h1>Bestel hier de lekkerste pizza's van heel ...</h1>
    </div>

    <div class="content">
        <form method="post" action="">
            <div class="dataInput">
                <div class="inputField">Naam: <input class="margin" type="text" name="name" placeholder="Voor- en achternaam" value="<?php echo $name?>" required minlength="2" maxlength="50"><br></div>
                <div class="inputField">Adres: <input class="margin" type="text" name="address" placeholder="Adres" value="<?php echo $address?>" required minlength="2" maxlength="50"><br></div>
                <div class="inputField">Postcode: <input class="margin" type="text" name="postcode" placeholder="Postcode" value="<?php echo $postcode?>" required min="6" maxlength="7"><br></div>
                <div class="inputField">Plaats: <input class="margin" type="text" name="location" placeholder="Plaats" value="<?php echo $location?>" required minlength="2" maxlength="20"><br></div>
            </div>
            <div class="pizzaLabel">Pizza's (Max. 20 stuks): </div>
            <div class="pizzaInput">
                <div class="pizzaInput">
                    <table>
                        <tr>
                            <th>Pizza naam</th>
                            <th>Pizza prijs</th>
                            <th>Aantal bestelde pizza's</th>
                        </tr>
                        <tr>
                            <td><?php echo $pizza[0][0];?></td>
                            <td><?php echo "€" . number_format($pizza[0][1],2, ",");?></td>
                            <td><input type="number" id="$numberOfPizza1" name="numberOfPizza1" placeholder="0" value="<?php echo $pizza[0][2];?>" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td><?php echo $pizza[1][0];?></td>
                            <td><?php echo "€" . number_format($pizza[1][1],2, ",");?></td>
                            <td><input type="number" id="$numberOfPizza2" name="numberOfPizza2" placeholder="0" value="<?php echo $pizza[1][2];?>" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td><?php echo $pizza[2][0];?></td>
                            <td><?php echo "€" . number_format($pizza[2][1],2, ",");?></td>
                            <td><input type="number" id="$numberOfPizza3" name="numberOfPizza3" placeholder="0" value="<?php echo $pizza[2][2];?>" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td><?php echo $pizza[3][0];?></td>
                            <td><?php echo "€" . number_format($pizza[3][1],2, ",");?></td>
                            <td><input type="number" id="$numberOfPizza4" name="numberOfPizza4" placeholder="0" value="<?php echo $pizza[3][2];?>" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td><?php echo $pizza[4][0];?></td>
                            <td><?php echo "€" . number_format($pizza[4][1],2, ",");?></td>
                            <td><input type="number" id="$numberOfPizza5" name="numberOfPizza5" placeholder="0" value="<?php echo $pizza[4][2];?>" min="0" max="20"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="deliveryMethodInput">
                <div>Bezorgen of ophalen:</div>
                <div class="deliveryMethod">
                    <input type="radio" id="bezorgen" name="deliveryMethod" value="<?php echo "bezorgen"?>" required>
                    <label for="bezorgen">Bezorgen</label>
                </div>
                <div class="deliveryMethod">
                    <input type="radio" id="ophalen" name="deliveryMethod" value="<?php echo "ophalen"?>" required>
                    <label for="ophalen">Ophalen</label><br>
                </div>
            </div>
            <div class="submitButton">
                <input type="submit" name="submit" value="Bestelling plaatsen">
            </div>
            <hr>
        </form>
    </div>
</body>
</html>

<?php
//Poging om alle waardes van de multi-dimensional array te printen
$keys = array_keys($pizza);
echo "<table>
            <tr>
                <th>Naam</th>
                <th>Prijs</th>
                <th>Aantal</th>
            </tr>
";
for ($i = 0; $i < count($pizza); $i++) {
    foreach($pizza[$keys[$i]] as $key => $value) {
        echo "
            <tr>
                <td>$value</td>               
                <td>$value</td>               
                <td>$value</td>               
            </tr>
        ";
    }
    echo "</table>";
    echo "<br>";
}?>

<?php
switch ($deliveryMethod) {
    case "bezorgen": ?>
        <div class="border">
            <div class="borderData">
                <div><?php echo "Naam: " . $name . ".\n";?></div>
                <div><?php echo "Adres: " . $address . ".\n";?></div>
                <div><?php echo "Postcode: " . $postcode . " " . $location . ".\n";?></div>
                <div><?php echo "Bestelling geplaatst op: " . $orderDate . ".\n";?></div>
                <div><?php echo "Bestelmethode: 'Bezorgen'.\n";?></div>
            </div>
            <div class="orderTable">
                <table>
                    <tr>
                        <th>Pizza naam</th>
                        <th>Pizza Prijs</th>
                        <th>Aantal pizza('s)</th>
                        <th>Totaalprijs</th>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[0][0];?></td>
                        <td><?php echo "€" . number_format($pizza[0][1],2, ",")?></td>
                        <td><?php echo $pizza[0][2];?></td>
                        <td><?php echo "€" . number_format($pizza[0][2] * $pizza[0][1],2, ",");?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[1][0];?></td>
                        <td><?php echo "€" . number_format($pizza[1][1],2, ",")?></td>
                        <td><?php echo $pizza[1][2]?></td>
                        <td><?php echo "€" . number_format($pizza[1][2] * $pizza[1][1],2, ",");?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[2][0];?></td>
                        <td><?php echo "€" . number_format($pizza[2][1],2, ",")?></td>
                        <td><?php echo $pizza[2][2]?></td>
                        <td><?php echo "€" . number_format($pizza[2][2] * $pizza[2][1],2, ",");?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[3][0];?></td>
                        <td><?php echo "€" . number_format($pizza[3][1],2, "")?></td>
                        <td><?php echo $pizza[3][2]?></td>
                        <td><?php echo "€" . number_format($pizza[3][2] * $pizza[3][1],2, ",");?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[4][0];?></td>
                        <td><?php echo "€" . number_format($pizza[4][1],2, ",")?></td>
                        <td><?php echo $pizza[4][2]?></td>
                        <td><?php echo "€" . number_format($pizza[4][2] * $pizza[4][1],2, ",");?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Kosten (excl. bezorgkosten)</td>
                        <td><?php $pizzaPriceTotal = ($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1]);
                            echo "€" . number_format($pizzaPriceTotal,2, ",")?></td>
                    </tr>
                    <tr>
                        <?php if ($dayOfTheWeek == 4) { ?>
                            <?php
                            if ($pizzaPriceTotal >= 20) {
                                $discount = $pizzaPriceTotal * 0.15;
                            } else {
                                $discount = 0;
                            }
                            ?>
                            <td></td>
                            <td></td>
                            <td>15% korting</td>
                            <td><?php echo "€" . number_format($discount,2, ",")?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Bezorgkosten</td>
                        <td><?php echo "€" . number_format($orderCosts,2, ",")?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Totaalprijs</td>
                        <td>
                            <?php
                                $pizzaPriceFinal = $pizzaPriceTotal - $discount + $orderCosts;
                                echo "€" . number_format($pizzaPriceFinal,2, ",")
                            ?>
                        </td>
                    </tr>
                </table>
                <?php
                break; ?>
            </div>
        </div>

        <?php
    case "ophalen": ?>
        <div class="border">
            <div class="borderData">
                <div><?php echo "Naam: " . $name . ".\n";?></div>
                <div><?php echo "Adres: " . $address . ".\n";?></div>
                <div><?php echo "Postcode: " . $postcode . " " . $location . ".\n";?></div>
                <div><?php echo "Bestelling geplaatst op: " . $orderDate . ".\n";?></div>
                <div><?php echo "Bestelmethode: 'Bezorgen'.\n";?></div>
            </div>
            <div class="orderTable">
                <table>
                    <tr>
                        <th>Pizza naam</th>
                        <th>Pizza Prijs</th>
                        <th>Aantal pizza('s)</th>
                        <th>Totaalprijs</th>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[0][0];?></td>
                        <td><?php echo "€" . number_format($pizza[0][1],2)?></td>
                        <td><?php echo $pizza[0][2];?></td>
                        <td><?php echo "€" . number_format($pizza[0][2] * $pizza[0][1],2);?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[1][0];?></td>
                        <td><?php echo "€" . number_format($pizza[1][1],2)?></td>
                        <td><?php echo $pizza[1][2]?></td>
                        <td><?php echo "€" . number_format($pizza[1][2] * $pizza[1][1],2);?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[2][0];?></td>
                        <td><?php echo "€" . number_format($pizza[2][1],2)?></td>
                        <td><?php echo $pizza[2][2]?></td>
                        <td><?php echo "€" . number_format($pizza[2][2] * $pizza[2][1],2);?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[3][0];?></td>
                        <td><?php echo "€" . number_format($pizza[3][1],2)?></td>
                        <td><?php echo $pizza[3][2]?></td>
                        <td><?php echo "€" . number_format($pizza[3][2] * $pizza[3][1],2);?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pizza[4][0];?></td>
                        <td><?php echo "€" . number_format($pizza[4][1],2)?></td>
                        <td><?php echo $pizza[4][2]?></td>
                        <td><?php echo "€" . number_format($pizza[4][2] * $pizza[4][1],2);?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Kosten</td>
                        <td><?php $pizzaPriceTotal = ($pizza[0][2] * $pizza[0][1]) + ($pizza[1][2] * $pizza[1][1]) + ($pizza[2][2] * $pizza[2][1]) + ($pizza[3][2] * $pizza[3][1]) + ($pizza[4][2] * $pizza[4][1]);
                            echo "€" . number_format($pizzaPriceTotal,2)?></td>
                    </tr>
                    <tr>
                        <?php if ($dayOfTheWeek == 4) { ?>
                            <?php
                            if ($pizzaPriceTotal >= 20) {
                                $discount = $pizzaPriceTotal * 0.15;
                            } else {
                                $discount = 0;
                            }
                            ?>
                            <td></td>
                            <td></td>
                            <td>15% korting</td>
                            <td><?php echo "€" . number_format($discount,2, ",")?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Totaalprijs</td>
                        <td>
                            <?php
                            $pizzaPriceFinal = $pizzaPriceTotal - $discount;
                            echo "€" . number_format($pizzaPriceFinal,2);
                            ?>
                        </td>
                    </tr>
                </table>
                <?php
                break; ?>
            </div>
            <?php }
            ?>
        </div>