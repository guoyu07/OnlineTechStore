<div id="sub" align="center">
    <nav>
        <ul style="alignment-adjust: middle">
            <li id="home">
                <a id="homePage" href="index.php" target="_top">Home</a>
            </li>
            <li id="searchtab">
                <form action="search.php" method="POST">
                <input type="text" id="toySearch" name="toySearch" placeholder="Search product name or category" class="search"/>
                </form>
            </li>
       <?php
                if (isset($_SESSION['userName'])) {
					$vf=$_SESSION['userName'];
				
				$nameuser=explode("@", $vf);
                  $usme = $nameuser[0];
				  echo 'welcome '.$usme;
				  //echo $usme;
       				echo "<table>";
					//echo "<tr>";
                   // echo 'welcome '.$usme;
					//echo "</tr>";
					echo "<tr>";
					echo "<td>";
					echo '<li id="login"><a href="Logout.php"><strong>Logout</strong></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                    echo "<td>";
					echo "<td>";
					echo '<a href="viewcart.php"><strong>ViewCart</strong></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                    echo "</td>";
					echo "<td>";
					echo '<a href="history.php"><strong>Order History</strong></a></li>';
					echo "</td>";
					echo "</tr>";
					echo "</table>";
				

                } else {
                    echo '<li id="signup">
                <a href="NewUser_Register.php">Sign up</a>
            </li>';
                echo    '<li ><a href="login.php">login</a>
				 </li>';
                }
                ?>
        </ul>
    </nav>
</div>