<html>
    <head>
        <link rel="stylesheet" href="css/productList.css">
    </head>
</html>
<?php

$connecti = mysqli_connect("localhost", "root", "", "techstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}

//include "connectToMysql.php";
$sql = "SELECT * FROM gadgets where flag=1";
$result = mysqli_query($connecti,$sql);
while($row = mysqli_fetch_array($result)) {
    //for ($i = mysqli_num_rows($result) - 1; $i >= 0; $i-2) {
        echo '<div id="products">
                 <figure class="thumb">
                 <a href="detail.php?name='.$row['itemname'].'"><img src="' .$row['image']. '"alt="productImage" width="150px" height="150px"/></a>
                     <figcaption><a href="detail.php?name='.$row['itemname'].'">' .$row['itemname']. '</a><br> $' .$row['price']. '</figcaption>
                 </figure>
                </div>';
}
?>