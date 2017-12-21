<?php
$GLOBALS['conn'] = mysqli_connect("localhost", "root", "", "techstore");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

