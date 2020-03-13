<?php
if (isset($_POST['login-submit'])) {
    require 'dbhandler.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../../content.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM Users WHERE Username=? OR Email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../content.php?error=sql1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($results)) {
                $pwdCheck = password_verify($password, $row['Pwd']);
                if ($pwdCheck == false) {
                    header("Location: ../../content.php?error=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['UserID'];
                    $_SESSION['uid'] = $row['Username'];

                    header("Location: ../../content.php?login=success");
                    exit();
                } else {
                    header("Location: ../../content.php?error=wrongpwd");
                }
            } else {
                header("Location: ../../content.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../../content.php");
    exit();
}