<?php 
 session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mystery Box Emporium</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="content.php#home">
            <img src="img/Logo/logo_transparent.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto nav-pills">
                <li class="nav-item">
                    <a class="nav-link in-page" id="pill-style" href="content.php#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in-page" id="pill-style" href="content.php#resources">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in-page" id="pill-style" href="content.php#clients">Clients</a>
                </li>
                <div class="nav-item dropdown">
                    <a href="catalog.php"><button class="dropbtn" id="pill-style">Catalog</button></a>
                    <div class="dropdown-content">
                        <a href="catalog.php#mystery">Mystery</a>
                        <a href="catalog.php#outfits">Outfits</a>
                        <a href="catalog.php#jewlery">Jewlery</a>
                        <a href="catalog.php#access">Accessory</a>
                    </div>
                </div>
            </ul>
            <!--Login System-->
            <div class="ml-auto nav-pills nav-item">
                <div class="row">
                <?php 
                    if (isset($_SESSION['userId'])) {

                        echo '<div id="welcome-txt">Welcome back, Dearest Customer!</div>';
                        echo '<form action="inc/login/logout.inc.php" method="POST">
                                <button type="submit" name="logout-submit" id="pill-style" class="pill-btn">Logout</button>
                              </form>';

                    } else {

                       echo '<form action="inc/login/login.inc.php" method="POST">
                                <input type="text" name="mailuid" placeholder="Username/Email" id="input-nav">
                                <input type="password" name="pwd" placeholder="Password" id="input-nav">
                                <button type=" submit" name="login-submit" id="pill-style" class="pill-btn">Login</button>
                             </form>
                             <a href="signup.php?click=true" id="pill-style" class="nav-link in-page pill-btn">Sign Up</a>';
                    }
                ?>
                </div>
            </div>
        </div>
    </nav>

    <!--- Script Source Files -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
    <!--- End of Script Source Files -->

</body>

</html>