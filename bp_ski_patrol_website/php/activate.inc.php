<?php

    if (isset($_POST['submit'])) {
        if($_POST['code'] == 4925) {

            include_once 'dbh.inc.php';

            $first = mysqli_real_escape_string($conn, $_POST['fn']);
            $last = mysqli_real_escape_string($conn, $_POST['ln']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $pwd = mysqli_real_escape_string($conn, $_POST['pass']);
            $pwd2 =  mysqli_real_escape_string($conn, $_POST['pass2']);

            //make username
            $firstLetter = substr($first, 0, 1);

            $uid = strtolower($last.$firstLetter);


            //Error handlers
            if (empty($first) || empty($last) ||empty($email) ||empty($phone) ||empty($pwd) ||empty($pwd2)) {
                header("Location: ../activate.php?activate=empty");
                exit();
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
                    header("Location: ../activate.php?activate=invalidchar");
                    exit();
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        header("Location: ../activate.php?activate=invalidemail");
                        exit();
                    } else {
                        $sql = "SELECT * FROM users WHERE user_email='$email'";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            header("Location: ../activate.php?activate=usertaken");
                            exit();
                        } else {
                            if ($pwd != $pwd2) {
                                header("Location: ../activate.php?activate=nomatch");
                                exit();
                            } else {
                                //Hash Password
                                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                                //Insert user in database
                                $sql = "INSERT INTO users (user_first, user_last, user_email, user_phone, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$phone', '$uid', '$hashedPwd');";
                                mysqli_query($conn, $sql);
                                header("Location: ../login.php?activate=sucess");
                                exit();
                            }
                        }
                    }
                }
            }

        } else {
            header("Location: ../activate.php?activate=codeerr");
            exit();
        }
    } else {
        header("Location: ../activate.php");
        exit();
    }