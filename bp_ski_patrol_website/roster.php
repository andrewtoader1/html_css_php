<!DOCTYPE html>

<html>
    <head>
        <?php
            session_start();
        ?>
        <title>Boyce Park Ski Patrol | Roster</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body class="roster" bgcolor="beige">
        <?php
            if (isset($_SESSION['u_id'])) {
                echo 'Roster';
            } else {
                header("Location: login.php");
            }
        ?>

        <?php
            include "php/header.php";
        ?>
    </body>
</html>