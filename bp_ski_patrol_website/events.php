<!DOCTYPE html>

<html>
    <head>
        <?php
            session_start();
        ?>
        <title>Boyce Park Ski Patrol | Events</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body class="events" bgcolor="beige">
        <?php
            if (isset($_SESSION['u_id'])) {
                echo 'Events';
            } else {
                header("Location: login.php");
            }
        ?>

        <?php
            include "php/header.php";
        ?>
    </body>
</html>