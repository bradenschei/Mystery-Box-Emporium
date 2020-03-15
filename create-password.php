<?php require './inc/nav.php' ?>

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
                
                <?php 
                
                    $selector = $_GET["selector"];
                    $validator = $_GET["validator"];
                    
                    if (empty($selector) || empty($validator)) {
                        echo "Could not validate your request!";
                        exit();
                    } else {
                        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                            ?>

                            <form action="inc/reset-password/reset-request.inc.php" method="post">
                                <input type="hidden" name="selector" value="<?php echo $selector;?>">
                                <input type="hidden" name="validator" value="<?php echo $validator;?>">
                                <input type="password" name="pwd" placeholder="Type a new password.">
                                <input type="password" name="pwd-repeat" placeholder="Repeat new password.">
                                <button type="submit" name="reset-password-submit">Reset Password</button>
                            </form>

                            <?php
                        }
                    }
                
                ?>

            </section>
        <div>
    </div>
</main>

<?php require './inc/footer.php' ?>