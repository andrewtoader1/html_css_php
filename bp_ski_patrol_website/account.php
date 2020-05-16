<html>
    <head>
        <?php
            session_start();
        ?>
        <title>myBPSP</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body class="account">
        <?php
            echo "<p align='center' id='mybpsp'>";
            echo $_SESSION['u_first']." ".$_SESSION['u_last']."<br>";
            echo $_SESSION['u_uid']."<br>";
            echo $_SESSION['u_email']."<br>";
            echo $_SESSION['u_phone']."<br>";
            echo "</p>";

            include "php/header.php"
        ?>
    </body>
</html>