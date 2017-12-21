    <html>
    <head>
        <title>Administration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/admin.css" type="text/css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/admin.js"></script>
        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "getList.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
        <?php include_once("template_header.php"); ?>
        <div id="sub">
        </div>
        <div><h1>Admin</h1></div>
        <div class="tabs">
            <ul class="tab-links">
                <li class="active"><a href="#tab1">Add Item</a></li>
                <li><a href="#tab2">Delete Item</a></li>
                <li><a href="#tab3">Update Item</a></li>
                <li><a href="#tab4">Logout</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab1" class="tab active">
                    <form action="upload1.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr><td>Item name:</td>
                                <td><input type="text" name="name" required></td>
                            </tr>
                            <tr><td>Item Category:</td>
                                <td><select name="category" id="category">
                                        <option value="Select a category">Select one</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Laptops">Laptops</option>
                                        <option value="Mobiles">Mobiles</option>
                                        <option value="Cameras">Cameras</option>
                                        <option value="Softwares">Software's</option>
                                        <option value="Music">Music</option>
                                        <option value="Electronic gadgets">Electronic gadgets</option>
                                        <option value="desktops">desktops</option>
                                                                          </select></td>
                            </tr>
                            
                            <tr><td>Price:</td>
                                <td><input type="number" name="price" required></td>
                            </tr>
                            <tr><td>Description:</td>
                                <td><textarea title="desc" name="desc" required></textarea></td>
                            </tr>
                            <tr><td>Quantity:</td>
                                <td><input type="number" name="qty" required></td>
                            </tr>
                            <tr><td>Image:</td>
                                <td><input type="file" name="fileToUpload" id="fileToUpload" required></td>
                            </tr>
                            <tr><td></td>
                                <td><button type="submit" name="submit">Submit</button></td></tr>
                        </table>
                    </form>
                </div>
                <div id="tab2" class="tab">
                    <form method="post">
                        <table>
                            <tr>
                                <td><h4>Select a category from where you want to delete item:</h4></td>
                            </tr>
                            <tr>
                                <td>
                                    <select onchange="showUser(this.value+','+'delete')">
                                        <option value="Select a category">Select one</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Laptops">Laptops</option>
                                        <option value="Mobiles">Mobiles</option>
                                        <option value="Cameras">Cameras</option>
                                        <option value="Softwares">Software's</option>
                                        <option value="Music">Music</option>
                                        <option value="Electronic gadgets">Electronic gadgets</option>
                                        <option value="desktops">desktops</option>
                                       
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <div id="txtHint"><b>gadgets will be listed here...</b></div>

                </div>

                <div id="tab3" class="tab">
                    <?php include_once("update.php"); ?>
                </div>
                <div id="tab4" class="tab">
                    <a href="Logout.php">Click here to log out</a>
                </div>
            </div>
        </div>
    </body>
</html>
