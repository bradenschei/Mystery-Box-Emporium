<?php include_once './inc/dbhandler.php'; ?>
<?php include './inc/nav.php'; ?>

<div class="offset" id="home">
    <div class="col-12 narrow text-center">
        <br>
        <br>
        <br>
        <br>
        <div class="Heading" <h1>Mystery Box Emporium</h1>
            <p></p>
        </div>
    </div>
</div>
<!--End Course Section-->

<!--Start Features Section-->
<div class="offset">

    <!--Start Jumbotron-->
    <div class="jumbotron">
        <div class="narrow" style="margin-top: 0px;">

            <div class="col-12">
                <h3 class="heading">HOW TO ACQUIRE A BOX</h3>
                <div class="heading-underline">
                </div>
            </div>

            <div class="row text-center">

                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-parachute-box fa-4x" data-fa-transform="shrink-3 up-5"></i>
                        <h3>BUY A BOX </h3>
                        <p>Select what kind of box you would like</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-shipping-fast fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
                        <h3>SHIP IT TO YOUR DOOR </h3>
                        <p>The box will be delivered straight to your door within 3 - 5 business days</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-trophy fa-4x" data-fa-transform="shrink-4 up-5"></i>
                        <h3>ENJOY </h3>
                        <p>Have fun wearing your new, stylish clothes from MBE</p>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center">
                <a href="catalog.php" class="btn btn-lg btn-secondary btn-outline-light">
                    View Our Products
                </a>
            </div>
        </div>
    </div>
    <!--End Jumbotron-->
</div>
<!--End Features Section-->

<!--Start Resources Section-->
<div id="resources" class="offset">

    <div class="fixed-background">

        <div class="row dark text-center">

            <div class="col-12">
                <h3 class="heading">We use a variety of different brands.</h3>
                <div class="heading-underline">
                </div>
            </div>

            <div class="col-md-4">
                <h3>Gucci</h3>
                <div class="feature">
                    <i class="fas fa-code fa-3x"></i>
                </div>
               
            </div>

            <div class="col-md-4">
                <h3>Louis Vuitton</h3>
                <div class="feature">
                    <i class="fas fa-bold fa-3x"></i>
                </div>
               
            </div>

            <div class="col-md-4">
                <h3>Ralph Polo Lauren</h3>
                <div class="feature">
                    <i class="fab fa-css3 fa-3x"></i>
                </div>
               
            </div>
        </div>
        <!--Row Dark-->

        <div class="fixed-wrap">
            <div class="fixed">
            </div>
        </div>
    </div>
    <!--End of Fixed Background Section-->

</div>
<!--End Resources Section-->

<!--Start Clients Section-->
<div id="clients" class="offset">
    <div class="jumbotron">
        <br>
        <br>
        <div class="col-12 text-center">
            <h3 class="heading">Clients</h3>
            <div class="heading-underline"></div>
        </div>


        <div class="row">

            <div class="col-md-6 clients">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/Elon.jpg">
                    </div>
                    <div class="col-md-8">
                        <blockquote>
                            <i class="fas fa-quote-left"></i>
                            I struggle to shop online because of my specific tastes. Mystery Box Emporium is a great new
                            way to buy clothes. They offer a wide selection of clothing for everyone.
                            <a href="client.php#elon-test">Read More</a>
                            <hr class="clients-hr">
                            <cite>&#8212; Elon, Long time friend of the company</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-6 clients">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/God.jpg">
                    </div>
                    <div class="col-md-8">
                        <blockquote>
                            <i class="fas fa-quote-left"></i>
                            ...when I heard about my boys making this new company that sells clothing, I was thrilled. They sell top of the line products at a reasonable price.
                            Nothing makes me happier than going online and just spending all my money on these fun little mystery boxes.
                            <a href="client.php#god-test">Read More</a>
                            <hr class="clients-hr">
                            <cite>&#8212; God, probably made the world</cite>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 text-center" id="cat-btn">
            <a href="client.php" class="btn btn-lg btn-secondary btn-outline-light">
                Check Out Some of Our Clients
            </a>
        </div>
        <br>
    </div>


    <!--End Clients Section-->
    <!--Contact Include-->
    <?php include './inc/footer.php' ?>