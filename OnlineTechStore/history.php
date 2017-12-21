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
        <?php include_once("template_header.php"); ?>
        <div id="menu">
            <div id="submain" align="center">
                <?php include 'menuBar.php'; ?>
            </div>
        </div>
        <?php include_once("categories_template.php"); ?>
        <div id="data">
            <div id="content">
			 <div><h2 class="title">Items Purchased</h2><br></div>
                <div class="entry" style="width: 80%; height: 20%">
                    <?php
                 //   include "connectToMysql.php";
				 
$connecti = mysqli_connect("localhost", "root", "", "techstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}



                    $name=$_SESSION['userName'];
                    $sql="SELECT * FROM orders,gadgets WHERE orders.itemid=gadgets.itemid and orders.userName='$name' and flag=1";
                    $result = mysqli_query($connecti,$sql);
					
                    $count=0;
                    echo '<table width="50%" border="0">
                                <tr>
                                    <td> <b>Product
                                    <td> <b>Rate
                                    </tr>
                                    <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>';
                    while($row = mysqli_fetch_array($result)) {
                        $count++;
						
						{
                        echo '<tr><td>' .$row['itemname']. '</td>'
                                . '<td>$ ' .$row['price']. '</td></tr>';
						}
						
                    }
                    echo '</table>';
					echo '<h3>Total number of items purchased : '.$count;
					echo '</h3>';
               
					$sql="SELECT * FROM orders,gadgets WHERE orders.itemid=gadgets.itemid and orders.userName='$name' and flag=0";
                    $result = mysqli_query($connecti,$sql);
					echo 'The below items are deleted by the admin, sorry for inconvenience.';
					 echo '<table width="50%" border="0">
                                <tr>
                                    <td> <b>Product
                                    <td> <b>Rate
                                    </tr>
                                    <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>';
                    while($row = mysqli_fetch_array($result)) {
                        $count++;
						
						{
                        echo '<tr><td>' .$row['itemname']. '</td>'
                                . '<td>$ ' .$row['price']. '</td></tr>';
						}
						
                    }
					echo '</table>';
					
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>