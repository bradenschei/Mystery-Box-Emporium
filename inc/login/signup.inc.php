<?php

if (isset($_POST['signup-submit'])) {

    error_reporting(E_ALL);
    require '../dbhandler.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../../signup.php?error=invalidmailusername");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../signup.php?error=invliadmail&uid=".$username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../../signup.php?error=invalidusername&mail=".$email);
        exit();
    } else if ($password !== $passwordRepeat) {
       header("Location: ../../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
       exit();
    } else {

        $sql = "SELECT Username FROM Users WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../signup.php?sqlerror1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../../signup.php?error=usertaken&mail=".$email);
                exit();
            } else {

                $sql = "INSERT INTO Users (Username, Email, Pwd) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header ("Location: ../../signup.php?error=sqlerror2");
                    exit();
                } else {

                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../../signup.php?registration=success");
                    exit();
                }
            }
        }
    }

    mysqli_stmt_close($stmt);

    mysqli_close($conn);

} else {
    header("Location: ../../signup.php");
    exit();
}

