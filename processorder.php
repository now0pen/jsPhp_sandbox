<?php
    // create short variable names
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php sandbox</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
        $totalqty = 0;
        $totalqty = $tireqty 
                    + $oilqty 
                    + $sparkqty;

        if( $totalqty == 0) {
            echo "you did not order anything.";
        } else {
            echo "<p>Order Processed at ";
            echo date('H:i, jS F Y');
            echo "</p>";
            echo '<p>Your order is as follows: </p>';
            echo $tireqty.' tires<br />';
            echo $oilqty.' bottles of oil<br />';
            echo $sparkqty.' spark plugs<br />';

            echo "Items ordered: ".$totalqty."<br />";
            $totalamount = 0.00;
            define('TIREPRICE', 100);
            define('OILPRICE', 10);
            define('SPARKPRICE', 4);
            $totalamount = $tireqty * TIREPRICE
            + $oilqty * OILPRICE
            + $sparkqty * SPARKPRICE;
            echo "Subtotal: $".number_format($totalamount,2)."<br />";
            $taxrate = 0.10; // local sales tax is 10%
            $totalamount = $totalamount * (1 + $taxrate);
            echo "Total including tax: $".number_format($totalamount,2)."<br />";
        }

    ?>
</body>
</html>