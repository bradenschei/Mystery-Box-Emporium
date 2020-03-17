<?php include "./inc/nav.php" ?>


<main class="downpush">
    <div class="container-fluid">
        <div class="jumbotron">
            <section>
                <div class="row signup-spacing">
                    <h1 class="mx-auto">Sign Up<br></h1>
                </div>
                <br>
                <div class="row row-fix signup-spacing">
                    <?php 
                    if(isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyfields"){
                            echo "<p class='signuperror'>Fill in all fields!</p>";
                        } elseif ($_GET["error"] == "invailduidmail") {
                            echo "<p class='signuperror'>Fill in Email and Username Field!</p>";
                        } elseif ($_GET["error"] == "invalidmail") {
                            echo "<p class='signuperror'>Fill in Email Field!</p>";
                        } elseif ($_GET["error"] == "invailduid") {
                            echo "<p class='signuperror'>Fill in Username Field!</p>";
                        } elseif ($_GET["error"] == "passwordcheck") {
                            echo "<p class='signuperror'>Make sure you type your password correctly!</p>";
                        }
                    } elseif ($_GET["registration"] == "success") {
                        echo "<p class='signupsuccess'>Signup Successful! Login is now avaliable!</p>";
                    } elseif ($_GET["click"] == "true") {
                        echo "";
                    }
                    ?>
                </div>
                <br>
                <div class="row row-fix signup-spacing">
                    <form action="inc/login/signup.inc.php" method="post">
                        <div class="row sign-form">
                            <input type="text" name="uid" placeholder="Username" id="input-nav">
                        </div>
                        <div class="row sign-form">
                            <input type="text" name="mail" placeholder="Email" id="input-nav">
                        </div>
                        <div class="row sign-form">
                            <input type="password" name="pwd" placeholder="Password" id="input-nav">
                        </div>
                        <div class="row sign-form">
                            <input type="password" name="pwd-repeat" placeholder="Repeat Password" id="input-nav">
                        </div>
                        <div class="row sign-form">
                            <button type="submit" name="signup-submit" class="pill-btn mx-auto">Sign Up!</button>
                        </div>
                    </form>
                </div>
                <div class="row-fix row signup-spacing">
                    <!-- Forgotten Password-->
                    <?php 
                    if (isset($_GET["newpwd"])) {
                        if ($_GET["newpwd"] == "passwordupdated") {
                            echo '<p class="signupsuccess row-fix">Your password has been reset!</p>';
                        }
                    }
                    ?>
                    <a href="reset-password.php" id="pill-btn-forgot">Forgot your password?</a>    
                </div>
            </section>
        </div>   
    </div>
</main>
<?php include "./inc/footer.php" ?> 