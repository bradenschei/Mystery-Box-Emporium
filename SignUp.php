<?php include "./inc/nav.php" ?>

<br>
<br>
<br>
<br>


<main>
    <div class="jumbotron d-flex justify-content-center">
        <section class="section-default">
            <div class="row">
                <h1 class="mx-auto">Sign Up</h1>
            </div>
            <form action="includes/./inc/login/signup.inc.php" method="post">
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
        </section>
    </div>
</main>


<?php include "./inc/footer.php" ?>