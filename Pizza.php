<?php
$name = '';
$address = '';
$postcode = '';
$location = '';
$orderDate = date("d/m/Y");
$deliveryMethod = '';
$pizza = array (
        array("Pizza Margherita", 12.50),
        array("Pizza Funghi", 12.50),
        array("Pizza Marina", 13.95),
        array("Pizza Hawai", 11.50),
        array("Pizza Quattro Formaggi", 14.50)
);
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];
    $location = $_POST["location"];
    $deliveryMethod = $_POST["deliveryMethod"];
    $pizza = $_POST["pizza"];
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

            Pizza's: <br>
            <table>
                <tr>
                    <th>Pizza naam</th>
                    <th>Pizza prijs</th>
                    <th>Aantal pizza's</th>
                </tr>
                <tr>
                    <td><?php echo $pizza[0][0];?></td>
                    <td><?php echo $pizza[0][1];?></td>
                    <td></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[1][0];?></td>
                    <td><?php echo $pizza[1][1];?></td>
                    <td></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[2][0];?></td>
                    <td><?php echo $pizza[2][1];?></td>
                    <td></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[3][0];?></td>
                    <td><?php echo $pizza[3][1];?></td>
                    <td></td>
                </tr>
                <tr>
                    <td><?php echo $pizza[4][0];?></td>
                    <td><?php echo $pizza[4][1];?></td>
                    <td></td>
                </tr>
            </table>
<!--            <input type="checkbox" id="pizzaMargherita" name="pizza" value="--><?php //echo $pizza[0][0]?><!--">-->
<!--            <label for="pizzaMargherita">Pizza Margherita - €12,50</label><br>-->
<!---->
<!--            <input type="checkbox" id="pizzaFunghi" name="pizza" value="--><?php //echo $pizza[1][0]?><!--">-->
<!--            <label for="pizzaFunghi">Pizza Funghi - €12,50</label><br>-->
<!---->
<!--            <input type="checkbox" id="pizzaMarina" name="pizza" value="--><?php //echo $pizza[2][0]?><!--">-->
<!--            <label for="pizzaMarina">Pizza Marina - €13,95</label><br>-->
<!---->
<!--            <input type="checkbox" id="pizzaHawai" name="pizza" value="--><?php //echo $pizza[3][0]?><!--">-->
<!--            <label for="pizzaHawai">Pizza Hawai - €11,50</label><br>-->
<!---->
<!--            <input type="checkbox" id="pizzaQuattroFormaggi" value="--><?php //echo $pizza[4][0]?><!--">-->
<!--            <label for="pizzaQuattroFormaggi">Pizza Quattro Formaggi - €14,50</label><br>-->

            Bezorgen of ophalen:
            <input type="radio" id="bezorgen" name="deliveryMethod" value="<?php echo "bezorgen"?>" required>
            <label for="bezorgen">Bezorgen</label>
            <input type="radio" id="ophalen" name="deliveryMethod" value="<?php echo "ophalen"?>" required>
            <label for="ophalen">Ophalen</label><br>

            <input type="submit" name="submit" value="Bestelling plaatsen">
        </form>
        <?php

        if (isset($_POST["submit"])) {
            switch ($deliveryMethod) {
                case "bezorgen":
                    echo "Naam: " . $name . ".\n";
                    echo "Adres: " . $address . ".\n";
                    echo "Postcode: " . $postcode . " " . $location . ".\n";
                    echo "Bestelling geplaatst op: " . $orderDate . ".\n";
                    echo "Bestelmethode: 'Bezorgen'.\n";
                    echo "Bestelde pizza('s): " . $pizza . ".\n";
                    break;

                case "ophalen":
                    echo "Naam: " . $name . ". \n";
                    echo "Adres: " . $address . ".\n";
                    echo "Postcode: " . $postcode . " " . $location . ".\n";
                    echo "Bestelling geplaatst op: " . $orderDate . ".\n";
                    echo "Bestelmethode: 'Ophalen'.\n";
                    echo "Bestelde pizza('s): " . $pizza . ".\n";
                    break;
            }
        }

        ?>
    </div>
</body>
</html>