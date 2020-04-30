<!DOCTYPE html>
<html lang="en">

<head>
    <title>XCHange-HOME</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="XCHange,study,bmsce" />

    <script type="text/javascript" src="sign_up.js">
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="newstyle.php" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="login_css.php">
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <div class="main-content" id="home">
        <div class="layer">
            <!-- header -->
            <header>
                <div class="container-fluid px-lg-5">
					<div class="row order-info">
                    <div class="middle mt-sm-3 col-sm-6 text-left">
                        <ul class="social mb-3">
                            <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
                        </ul>

                    </div>

                </div>
                    <!-- nav -->
                    <nav class="pt-4 d-lg-flex">
                        <div id="logo">
                            <h1> <a href="index.html">XCHange</a></h1>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="newreg.php" class="scroll">Sign Up</a></li>
                            <li><a href="#contact" class="scroll">Login</a></li>
                            <li class="active"><a href="#testimonials" class="scroll">Sign Up As a Teacher</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <div class="container127" id="container127">
            	<div class="form-container sign-up-container">
            		<form action="" method="post">
            			<h1>Sign in for Teacher</h1>
            			<input type="email" name="email" placeholder="Email" />
            			<input type="password" name="password" placeholder="Password" />
                  <input type="submit" name="submitteach" value="submit" class="button2" />
                  <p class="message">Not yet registered? <a href="teachregister.php">Register here</a></p>
            		<!--	<button>Sign Up</button>-->
            		</form>
            	</div>
            	<div class="form-container sign-in-container">
            		<form action="" method="post">
            			<h1>Sign in for Student</h1>
            			<input type="email" name="email" placeholder="Email" />
            			<input type="password" name="password" placeholder="Password" />
            			<a class="class-a"href="#">Forgot your password?</a>
                  <input type="submit" name="submitstud" value="submit" class="button2" />
                  <p class="message">Not yet registered? <a href="register.php">Register here</a></p>
            		</form>
            	</div>
            	<div class="overlay-container">
            		<div class="overlay">
            			<div class="overlay-panel overlay-left">
            				<h1 class="classh1">Hey Student!</h1>
            				<p class="classp">Students are left..</p>
            				<button class="ghost button2" id="signIn">Student Sign In</button>
            			</div>
            			<div class="overlay-panel overlay-right">
            				<h1 class="classh1">Welcome Teacher!</h1>
            				<p class="classp">Login and Guide us...</p>
            				<button class="ghost button2" id="signUp">Teacher Sign In</button>
            			</div>
            		</div>
            	</div>
            </div>
            </body>
            <script type="text/javascript" src="slidinghtml.js">
            </script>
        <!-- footer start -->
        <footer class="footer-content">

            <div class="layer footer-1">
                <div class="container-fluid">
                    <div class="row footer-top-inner-w3ls">
                        <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-5">
                            <h2>
                                <a href="index.html">XCHange</a>
                            </h2>
                            <p class="my-3">All rights are reserved for this website. We do not encourage improper behaviour among users. </p>
                            <p>
                                BMSCE management and the creators of the website are solely responsible for running this website, they maintain and improve. Copyright infringement is strictly prohibited.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                            <div class="footer-w3pvt">
                                <h3 class="mb-3 w3pvt_title">B.M.S.C.E</h3>
                                <hr>
                                <ul class="list-info-w3pvt last-w3ls-contact mt-lg-4">
                                    <li>
                                        <p> Address - P.O. Box No.: 1908, Bull Temple Road,
    Bangalore - 560 019
    Karnataka, India.</p>

                                    </li>
                                    <li class="my-2">
                                        <p>Fax -  +91-80-26614357</p>

                                    </li>
                                    <li class="my-2">
                                        <p>Email -  info@bmsce.ac.in</p>

                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                            <div class="footer-w3pvt">
                                <h3 class="mb-3 w3pvt_title">Newsletter</h3>
                                <hr>

                            <div class="footer-text">
                                <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                                <form action="#" method="post">
                                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                                    <button class="btn1 btn"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                                    <div class="clearfix"> </div>
                                </form>
                            </div>
                        </div>


                            </div>
                        </div>

                    </div>

                    <p class="copy-right-grids text-li text-center my-sm-4 my-4">© 2019 XCHange. All Rights Reserved

                    </p>
                    <div class="w3ls-footer text-center mt-4">
                        <ul class="list-unstyled w3ls-icons">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="move-top text-right"><a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a></div>
                </div>
                <!-- //footer bottom -->
        </footer>
        <!-- //footer -->
</body>
</html>
