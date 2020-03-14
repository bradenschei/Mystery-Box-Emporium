<?php

if (isset($_POST['reset-request-submit'])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://datadev.devcatalyst.com/~mahs_bscheidecker/reset-password.php/create-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    include '../dbhandler.php';

    $userEmail = $_POST['email'];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../reset-password.php?error=sql1");
        echo "There was an error";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdRestSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../reset-password.php?error=sql2");
        echo "There was an error";
        exit();
    } else {
        $hasedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hasedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($stmt);

    $to = $userEmail;

    $subject = 'Reset your password for Mystery Box';

    $message = '<p>We recieved a password reset request for your account. The link to reset your password is below. If you did not
    request this reset, ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url .'">' . $url . '</a></p>';

    $headers = "From: Mystery Inc. <mysteryboxemporium69@gmail.com>\r\n";
    $headers .= "Reply-To: mysteryboxemporium69@gmail.com\r\n";
    $headers .= "Cotent-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../../reset-password.php?reset=success");
    
} else {
    header("Location: ../../content.php");
    exit();
}