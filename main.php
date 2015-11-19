<?php  
   session_start();
   ob_start();
?>  


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ElevenOneFoods</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">ElevenOne Foods</a>
                        <div id="userPanel">
                            <?php 
                                if(@$_SESSION['username']){
                                    echo "<strong>".$_SESSION['username']."</strong>";
                                    echo "<a href='logout.php'><button class='text-center form-btn form-btn' style='width: 80px; height: 30px; padding: 5px; font-size: 0.7em; float: right;' >Logout</button></a>";
                                }else{
                                    echo "<strong>Hello Guest!</strong>";  
                                }
                            ?>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">ABOUT</a></li>
                            <li><a class="color_animation" href="#pricing">PRICING</a></li>
                            <li><a class="color_animation" href="#featured">FEATURED</a></li>
                            <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>

        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title">ElevenOneFoods</h2>
                    <h2 class="white second-title">" Nutritious food without preservatives "</h2>
                    <hr>
                    <p>Eleven One is a modern kitchen created with freshness in mind. Every meal is completely customizable and handcrafted in our open kitchen with only the finest and freshest ingredients. We believe in fast, flavorful meals. And we believe great food shouldn't break the bank.</p>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">Variety of delicacies including Pizza, burgers, sandwiches, submarines, pastas, lasagna, local curries, coffee, smoothies, frappes, teas etc!
Our aim is to provide a mix fusion of delicious dishes around the world combining with local delicacies and an unforgettable service....our drinks menu goes head to head with the food and won't surely disappoint you...we give you more time to enjoy our tasty menu at your leisure having opened whole throughout the week from early morning until late night.... with free wifi, adequate parking, air-conditioned premises and HD tv channels will add more value to your experience.... our pricing had made it a lot affordable to you so it won't leave a whole in your smart wallet....! We do have facilities to host functions up to 60 pax and provide delivery services within colombo and suburbs..! We deliver where ever you are in Colombo.</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/kabob.jpg" width="250" height="220">
                       <img src="images/limes.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/radish.jpg"  width="250" height="220">
                       <img src="images/food_icon01.jpg"  width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/food_icon05.jpg"  width="250" height="220">
                       <img src="images/seeds.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Affordable</span> pricing</h1>
             </div>
            <div class="text-content container">
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter="breakfast">Breakfast</li>
                                <li class="filter" data-filter="special">Special</li>
                                <li class="filter" data-filter="desert">Desert</li>
                                <li class="filter" data-filter="dinner">Dinner</li>
                            </ul><!-- @end #filter-list -->
                            <ul id="portfolio">
                                <a href="placeOrder" title="Click to buy!"><li class="item breakfast"><img src="images/briyani.jpg" alt="Food" >
                                    <h2 class="white">Rs.300</h2>
                                </li></a>
                                
                                                                                        
                             
                                <a href="placeOrder" title="Click to buy!"><li class="item breakfast"><img src="images/fried rice.jpg" alt="Food" >
                                    <h2 class="white">Rs.280</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!"><li class="item desert"><img src="images/Watalappan.jpg" alt="Food" >
                                    <h2 class="white">Rs.170</h2>
                                </li></a>
                                
                                <a href="placeOrder" title="Click to buy!"><li class="item special"><img src="images/pasta.jpg" alt="Food" >
                                    <h2 class="white">Rs.440</h2>
                                </li></a>
                                
                                <a href="placeOrder" title="Click to buy!"><li class="item dinner" style="margin-bottom:25px;"><img src="images/coffee.jpg" height="137px" alt="Food" >
                                    <h2 class="white">Rs.180</h2>
                                </li></a>
                                
                                <a href="placeOrder" title="Click to buy!"><li class="item desert"><img src="images/brownie.jpg" height="136px" alt="Food" >
                                    <h2 class="white">Rs.250</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!"><li class="item breakfast"><img src="images/lamp rice.jpg" alt="Food" >
                                    <h2 class="white">Rs.380</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!"> <li class="item special"><img src="images/spaghetti.jpg" alt="Food" >
                                    <h2 class="white">Rs.375</h2>
                                </li></a>
                                
                                <a href="placeOrder" title="Click to buy!"><li class="item special"><img src="images/indian noodles.jpg" height="137px" alt="Food" >
                                    <h2 class="white">Rs.400</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!"><li class="item desert"><img src="images/ice cream.jpg" height="137px" alt="Food" >
                                    <h2 class="white">Rs.150</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!"><li class="item special"><img src="images/soup noodles.jpg" height="137px" alt="Food" >
                                    <h2 class="white">Rs.280</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!"><li class="item breakfast"><img src="images/Nasi goreng.jpg" height="137px" alt="Food" >
                                    <h2 class="white">Rs.200</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!"> <li class="item dinner "><img src="images/Lassi.png" alt="Food" >
                                    <h2 class="white">Rs220</h2>
                                </li></a>
                                <a href="placeOrder" title="Click to buy!">   <li class="item dinner "><img src="images/faluda.jpg" height="286px" alt="Food" >
                                    <h2 class="white">Rs200</h2>
                                </li></a>
                            </ul><!-- @end #portfolio -->
                        </div><!-- @end #w -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ Featured Dish  ============= -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>Our Featured Dishes <span>Menu</span></h1>
            </div>
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>Have a look to our dishes!</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">Each food is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/slider1.jpg"  alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider2.jpg" alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider3.JPG" alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============ Reservation  ============= -->

        <section  id="reservation"  class="description_content">
            <div class="featured background_content">
                <h1>Reserve a Table!</h1>
            </div>
            <div class="text-content container">
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
                                                <input type="text" name="state" id="state" required="required" class="form" placeholder="State" />
                                                <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="Reservation Date" />
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" />
                                                <input type="text" name="guest" id="guest" required="required" class="form" placeholder="Guest Number" />
                                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                            </div>

                                            <div class="col-xs-6 ">
                                                <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Reserve</button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <!-- Message -->
                                        <div class="right-text">
                                            <h2>Hours</h2><hr>
                                            <p>Monday to Friday: 7:30 AM - 11:30 AM</p>
                                            <p>Saturday & Sunday: 8:00 AM - 9:00 AM</p>
                                            <p>Monday to Friday: 12:00 PM - 5:00 PM</p>
                                            <p>Monday to Saturday: 6:00 PM - 1:00 AM</p>
                                            <p>Sunday to Monday: 5:30 PM - 12:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>

        <!-- ============ Social Section  ============= -->

        <section class="social_connect">
            <div class="text-content container">
                <div class="col-md-6">
                    <span class="social_heading">FOLLOW</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">OR DIAL</span>
                    <span class="social_info"><a class="color_animation" href="tel:(94) 071-510-3021">(94) 071-510-3021</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.738866015558!2d79.95949391431803!3d6.921788520326328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25721acd59605%3A0x328358bba434cf93!2sChandrika+Kumaratunga+Mawatha!5e0!3m2!1sen!2slk!4v1447908175981" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="sendFeedback">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div><!-- End Right Inputs -->
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" title="One more step to go!" class="form-btn">Next</button>
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p style="font-size: 0.8em; color:#fff;"><strong>© 2015 ElevenOne Foods, (PVT)LTD. All rights reserved.</strong></p>
                </div>
                <div class="col-md-4">
                    <p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>
