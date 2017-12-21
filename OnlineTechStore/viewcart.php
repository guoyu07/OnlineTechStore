<?php session_start(); ?>
<html>
    <head>
        <title>UTD Tech Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="css/index2.css" type="text/css" rel="stylesheet" />
        <link href="css/tab.css" type="text/css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/tab.js"></script>
    </head>
    <body>
        <?php include_once("template_header.php");?>
        <div id="menu">
            <div id="submain" align="center">
                <?php include 'menuBar.php';?>
            </div>
        </div>
        <?php include_once("categories_template.php");?>
        <div id="data">
                        <div id="content">
                <div class="post">
                    <h2 class="title">My Cart</h2>
                    <div class="entry" style="width: 80%; height: 20%">

                        <pre><?php
                            //	print_r($_SESSION);
                            ?></pre>

                        <form action="#" method="POST">
                            <table width="100%" border="0">
                                <tr>
                                    <Td> <b>No
                                    <td> <b>Product
                                    <td> <b>Qty
                                    <td> <b>Rate
                                    <td> <b>Price
                                    <td> <b>Delete
                                </tr>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                                <?php
                                $tot = 0;
                                $i = 1;
                                if (isset($_SESSION['cart1'])) {
                                foreach ($_SESSION['cart1'] as $id => $x) {
                                echo '<tr>
                                        <Td> ' . $i . '
					<td> ' . $x['nm'] . '
					<td> ' . $x['qty'] . '   
					<td> ' . $x['rate'] . '
					<td> ' . ($x['qty'] * $x['rate']) . '
					<td> <a href="delete.php?id=' .$x['id']. '&name=' .$x['nm'] . '">Delete</a>
					</tr>';
                                $tot = $tot + ($x['qty'] * $x['rate']);
                                $i++;
                                    }
                                }
                                ?>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                                <tr>
                                <td colspan="6" align="right">
                                <h3>Total:</h3>
                                </td>
                                <td> <h3><?php echo $tot; ?> </h3></td>
                                </tr>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                                <Br>
                                </table>						
                                </form>
                        <a id="onclick" href="checkOut.php"><img src="images/checkout.jpg" alt="checkOut" width="140px" height="50px"</a>
                                </div>
                        </div>
                </div>
        </div>
    </body>
</html>