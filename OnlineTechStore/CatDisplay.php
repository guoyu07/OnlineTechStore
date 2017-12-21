<?php session_start(); ?>
<html>
    <head>
        <title>UTD Tech Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="css/index2.css" type="text/css" rel="stylesheet" />
        <link href="css/tab.css" type="text/css" rel="stylesheet" />
        <link href="css/productList.css" type="text/css" rel="stylesheet" />
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

            <?php
            if (isset($_SESSION['userName'])) {
              //  include "connectToMysql.php";
			  
$connecti = mysqli_connect("localhost", "root", "", "techstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}

                $catId = $_GET['cat'];
                if ($catId == 'less') {
                    $sql = "SELECT * FROM gadgets WHERE price<=100 and flag=1";
                    $result = mysqli_query($connecti, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div id="products">
                 <figure class="thumb">
                 <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                     <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                 </figure>
                </div>';
                    }
                } else if ($catId == 'gre') {
                    $sql = "SELECT * FROM gadgets WHERE price>100 and flag=1";
                    $result = mysqli_query($connecti, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div id="products">
                 <figure class="thumb">
                 <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                     <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                 </figure>
                </div>';
                    }
                } else {
                    $sql = "SELECT * FROM gadgets WHERE categoryId='$catId' and flag=1";
                    $result = mysqli_query($connecti, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div id="products">
                 <figure class="thumb">
                 <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                     <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                 </figure>
                </div>';
                    }
                }
            } else {
                //include 'content.php';
				include 'slideshow.php';
                echo '<br><br><br><br><br><br><br><br><br><h4>Login to browse more!! </h4>';
            }
            ?>
        </div>
    </body>
</html>

