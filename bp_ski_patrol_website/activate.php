<html>
    <head>
        <?php
            session_start();
        ?>
        <title>BPSP | Activate Account</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body class="activate">
        <div id="activatef">
        <font color="gray"><h1 align="center">Activate Your Boyce Park Ski Patrol Account</h1></font>
        <p id="activatep">
            <form align="center" method="POST" action="php/activate.inc.php">
                <p class="activateform">
                    <input class="inputactivate" type="text" name="code" placeholder="activation code" maxlength="4"/>
                </p>
                <p class="activateform">
                    <input class="inputactivate" type="text" name="fn" placeholder="first name"/>
                </p>
                <p class="activateform">
                    <input class="inputactivate" type="text" name="ln" placeholder="last name"/>
                </p>
                <p class="activateform">
                    <input class="inputactivate" type="text" name="email" placeholder="email"/>
                </p>
                <p class="activateform">
                    <input class="inputactivate" type="text" name="phone" placeholder="cell phone number (enter numbers only)" maxlength="10"/>
                </p>
                <p class="activateform">
                    <input class="inputactivate" type="password" name="pass" placeholder="password"/>
                </p>
                <p class="activateform">
                    <input class="inputactivate" type="password" name="pass2" placeholder="confirm password"/>
                </p>
                <p class="activateform">
                    <button id="activatebutt" type="submit" name="submit">Activate Now</button>
                </p>
            </form>
            </div>
        </p>
        <?php
            include "php/header.php";
        ?>
    </body>
</html>