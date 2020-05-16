<html>
    <head>
        <?php
            session_start();
        ?>
        <title>BPSP | Sign In</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body class="login">
    <div id="activatef">
        <font color="gray"><h1 align="center">Please Sign In</h1></font>
        <p id="activatep">
            <form align="center" method="POST" action="php/login.inc.php">
                <p class="activateform">
                    <input class="inputactivate" type="text" name="uid" placeholder="username or email"/>
                </p>
                <p class="activateform">
                    <input class="inputactivate" type="password" name="pwd" placeholder="password"/>
                </p>
                <p class="activateform">
                    <button id="activatebutt" type="submit" name="submit">Sign In</button>
                </p>
            </form>
            </div>
        </p>
        <?php
            include "php/header.php";
        ?>
    </body>
</html>