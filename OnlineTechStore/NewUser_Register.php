<html>
    <head>
        <title>User Registration</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/userRegister.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/info.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php include_once("template_header.php");?>
        <div id="sub">
        </div>
        <br>
        <div class="form">
            <h3>USER REGISTRATION</h3>
            <form method="post" action="addUser.php">
            <table align="center">
                <tr><td>Username:</td><td><input type="email" name="username" id="username" placeholder="Enter Email"></td>
			<td><span id="1" class="info"></span></td></tr>
                <tr><td>Password:</td><td><input type="password" name="password" id="password" placeholder="Password"></td>
			<td><span id="2" class="info"></span></td></tr>
                <tr><td>Address:</td><td><input type="text" name="address" id="address" placeholder="Address"></td>
			<td><span id="3" class="info"></span></td></tr>
                <tr><td>City:</td><td><input type="text" name="city" id="city" placeholder="City"></td>
			<td><span id="4" class="info"></span></td></tr>
                <tr><td>State:</td><td><input type="text" name="state" id="state" placeholder="State"></td>
			<td><span id="5" class="info"></span></td></tr>
               <tr><td>Phone:</td><td><input type="number"  name="phone" id="phone" min="1000000000" max= "9999999999" placeholder="10 digit number"></td>
			<td><span id="6" class="info"></span></td></tr>
               <tr><td></td><td><button type="submit" id="submit">Register</button></td></tr>
            </table> 
                        </form>

        </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="js/validate.js"></script>
    </body>

</html>

