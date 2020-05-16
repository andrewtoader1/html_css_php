<html>
    <head>
        <title>nav</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <nav>
            <p>
                <a href="index.php"><img id="bplogo" src="images/bpLogo.png" height="70" length="70"/></a>
            </p>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a>
                    <ul>
                        <li><a href="index.php#h1Index">About Us</a></li>
                        <li><a href="team.php">Our Team</a></li>
                    </ul>
                </li>
                <li><a href="#">Members</a>
                    <ul>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="roster.php">Roster</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                    </ul>
                </li>
                <li><a href="#">Affiliations</a>
                    <ul>
                        <li><a href="https://www.nsp.org" target="_blank">National Ski Patrol</a></li>
                        <li><a href="https://www.alleghenycounty.us/parks/boyce/snow-conditions.aspx" target="_blank">Boyce Park Ski Area</a></li>
                    </ul>
                </li>
                <li><a href="donate.php">Donate Now</a></li>
                <li><a href="#">Join Us</a>
                    <ul>
                        <li><a href="join.php">Join The Team</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
            
                <?php
                    if (!isset($_SESSION['u_id'])) {
                        echo '<ul id="ul2">
                                <li><a href="#">Sign In&nbsp;<img height="15" width="15" src="images/arrow.png"></a>
                                    <ul align="center">
                                        <li><a href="#">
                                            <form action="php/login.inc.php" method="POST">
                                                <input id="logintext" type="text" name="uid" placeholder="username"/>
                                                <br><br>
                                                <input id="logintext" type="password" name="pwd" placeholder="password"/>
                                                <br><br>
                                                <button id="loginbutt" type="submit" name="submit">Sign In</button>
                                            </form>
                                        </a><li>
                                        <li><a href="activate.php">Activate Account</a></li>
                                    </ul>
                                </li>
                              </ul>';
                    } else {
                        echo '<ul id="ul3">
                                    <li><a href="#"><img src="images/avatar.png" height="20" width="20">&nbsp;Welcome, '.$_SESSION['u_first'].'!</a>
                                        <ul>
                                            <li><a href="account.php">myBPSP</a></li>
                                            <li><a href="php/logout.inc.php">Sign Out</a></li>
                                        </ul>
                                </li>
                              </ul>';
                    }
                ?>
            </ul>
        </nav>
    </body>
</html>