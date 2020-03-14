<?php include "./inc/nav.php" ?>

<br>
<br>
<br>
<br>


<main>
    <div class="container-fluid">
        <div class="jumbotron d-flex justify-content-center">
            <section class="section-default">
                <div class="row">
                    <h1 class="mx-auto">Sign Up<br></h1>
                </div>
                <br>
                <div class="row">
                    <?php 
                    if(isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields"){
                            echo "<p class='signuperror'>Fill in all fields!</p>";
                        } elseif ($_GET['error'] == "invailduidmail") {
                            echo "<p class='signuperror'>Fill in Email and Username Field!</p>";
                        } elseif ($_GET['error'] == "invalidmail") {
                            echo "<p class='signuperror'>Fill in Email Field!</p>";
                        } elseif ($_GET['error'] == "invailduid") {
                            echo "<p class='signuperror'>Fill in Username Field!</p>";
                        } elseif ($_GET['error'] == "passwordcheck") {
                            echo "<p class='signuperror'>Make sure you type your password correctly!</p>";
                        }
                    } elseif ($_GET['signup'] == 'success') {
                            echo "<p class='signuperror'>Signup Successful! Login is now avaliable!</p>";
                    } 
                    ?>
                </div>
                <br>
                <div class="row" style="padding-left: 23px;">
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
                <!-- Forgotten Password-->
                <a href="reset-password.php">Forgot your password?</a>    
            </section>
        </div>   
    </div>
</main>
<?php include "./inc/footer.php" ?> 