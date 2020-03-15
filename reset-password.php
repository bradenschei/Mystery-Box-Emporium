<?php require './inc/nav.php' ?>
<?php 

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth();

?>

<br>
<br>
<br>
<br>
<br>
<br>

<main>
    <div class="container-fluid">
        <div class="jumbotron d-flex justify-content-center">
            <section class="section-default">
                <div class="row">
                    <h1 >Reset your password</h1>
                </div>
                <div class="row">
                    <p>An email will be sent to you with instructions on how to reset your password.</p>
                </div>
                <div class="row">
                    <form action="./inc/reset-password/reset-request.inc.php" method="POST" class="form-control-lg">

                        <input type="text" name="email" placeholder="Enter your email address." id="input-nav">
                        <div class="row">
                            <button type="submit" name="reset-request-submit" class="pill-btn">Recieve your new password by mail</button>
                        </div>

                    </form>
                    <?php 
                    if (isset($_GET["reset"])) {
                        if ($_GET["reset"] == "success") {
                            echo "<p>Check your email!</p>";
                        }
                    }
                    ?>
                </div>
            </section>
        <div>
    </div>
</main>

<?php require './inc/footer.php' ?>