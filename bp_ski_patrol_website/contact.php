<!DOCTYPE html>

<html>
    <head>
        <?php
            session_start();
        ?>
        <title>Boyce Park Ski Patrol | Contact</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript">
            function Display() {
                document.getElementById("form2").innerHTML = "<center><p class=\"formdes\">Thank you for completing the form.  We will get back to you as soon as possible.</p></center>";
            }
        </script>
    </head>
    <body bgcolor="#668B8B">
        <span id="form2">
        <p class="formd" id="formd">
            Contact US
        </p>
        <br>
        <form action="mailto:bpskipatrol@gmail.com?Subject=Contact Request">
                <hr size="2px" color="white">
            <p class="formdes">
                NAME
                <input class="inputtext" type="text" id="fname"/>
            </p>
            <hr size="2px" color="white">
            <p class="formdes">
                EMAIL
                <input class="inputtext" type="text" id="email"/>
            </p>
            <hr size="2px" color="white">
            <p class="formdes">
                TELL US...
                <textarea class="inputtext" type="text" id="askus"></textarea>
            </p>
            <hr size="2px" color="white">
            <p class="formd">
                <center><input id="inputbutt2" type="submit" value="Submit" onclick="Display();"/></center>
            </p>
        </form>
        </span>
        <?php
            include "php/header.php";
        ?>
    </body>
</html>