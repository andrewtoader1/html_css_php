<!DOCTYPE html>

<html>
    <head>
        <?php
            session_start();
        ?>
        <title>Boyce Park Ski Patrol | Join Us</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript">
            function Display() {
                document.getElementById("form").innerHTML = "<center><p class=\"formdes\">Thank you for completing the form.  We will get back to you as soon as possible.</p></center>";
            }
        </script>
    </head>
    <body bgcolor="#668B8B">
        <span id="form">
        <p class="formd" id="formd">
            JOIN US
        </p>
        <br>
        <form action="mailto:bpskipatrol@gmail.com?Subject=New Candidate">
                <hr size="2px" color="white">
            <p class="formdes">
                FULL NAME
                <input class="inputtext" type="text" id="fname"/>
            </p>
            <hr size="2px" color="white">
            <p class="formdes">
                EMAIL
                <input class="inputtext" type="text" id="email"/>
            </p>
            <hr size="2px" color="white">
            <p class="formdes">
                AGE
                <input class="inputtext" type="text" id="age" maxlength="3" length="4"/>
            </p>
            <hr size="2px" color="white">
            <p class="formdes">
                WHERE ARE YOU FROM?
                <input class="inputtext" type="text" id="home"/>
            </p>
            <hr size="2px" color="white">
            <p class="formdes">
                FIRST AID EXPERIENCE: &nbsp;
                <select id="fa" length="1">
                    <option>Beginner</option>
                    <option>Some Experience</option>
                    <option>A lot of Experience</option>
                    <option>Advanced</option>
                </select>
            </p>
            <hr size="2px" color="white">
            <p class="formd">
                <center><input id="inputbutt" type="submit" value="Submit" onclick="Display();"/></center>
            </p>
        </form>
        </span>


        <?php
            include "php/header.php";
        ?>
    </body>
</html>