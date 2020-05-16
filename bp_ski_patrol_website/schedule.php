<!DOCTYPE html>

<html>
    <head>
        <?php
            session_start();
        ?>
        <title>Boyce Park Ski Patrol | Schedule</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body bgcolor="beige" vlink="blue">
        <?php
            if (isset($_SESSION['u_id'])) {
                echo '<p align="center" id="calTop">
                        <iframe src="https://calendar.google.com/calendar/embed?src=bpskipatrol%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="800" height="550" frameborder="0" scrolling="no"></iframe>
                    </p>
                    <br>
                    <div class="schedule">
                    <p>
                        <span id="write"><b>To view working Patrollers, click on event.</b></span>
                    </p>
                    </div>
                    <br><br><br><br>
                    <div class="schedule2">
                    <p>
                        <span id="write"><a href="bpschedule.pdf" target="_blank">View Official Roster</a></span>
                    </p>
                    </div>
                    <br><br><br>';
            } else {
                header("Location: login.php?restriction=signedin");
            }
        ?>

        <?php
            include "php/header.php";
        ?>
    </body>
</html>