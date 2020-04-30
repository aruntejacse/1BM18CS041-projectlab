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
                            <h1> <a href="newhome.php">XCHange</a></h1>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li><a href="newhome.php">Home</a></li>
                            <li><a href="newreg.php" class="scroll">Sign Up</a></li>
                            <li><a href="login.php" class="scroll">Login</a></li>
                            <li class="active"><a href="newteachregis.php" class="scroll">Sign Up As a Teacher</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <div class="text-why">
              <h2>&nbsp &nbsp &nbsp &nbspImprove the XCHange community</h2><br/>
                <ul style="list-style-type:none;" class="bold">
                  <li><i class="fa fa-exclamation-circle" style="font-size:28px;color:#000080"></i>&nbspAnswer questions</li><br/>
                  <li><i class="fa fa-cubes" style="font-size:28px;color:#000080"></i>&nbsp Curious? Go through random answers..</li><br/>
                  <li><i class="fa fa-comments-o" style="font-size:28px;color:#000080"></i>&nbsp Meet alike minds</li>
                </ul>
            </div>
            <div class="form">
              <h1 text-align="center" style="padding:1px;" class="nfont">SIGN UP</h1>
              <form name="signup" action="" onSubmit="return validation_for_signup()" method="post">
              <input type="text" name="name" id="ln" value="" size="50" required /><label for="ln" class="labelemail"><span class="contentemail">Name</span></label><span id="errorln" style="color: Red; display: none">* Invalid Name</span>
              <br>
              <p>Select your Branch:&nbsp &nbsp<select id="branch" name="branch">
            <option value="CSE">CSE</option>
            <option value="ISE">ISE</option>
            <option value="ECE">ECE</option>
            <option value="MECH">MECH</option>
          </select></p>


                    <input type="text" id="unn" name="interests" value="" size="50" required /><label for="unn" class="labelemail"><span class="contentemail">Interests</span></label>
                      <input type="text" name="email" id="emi"  value="" size="50" required /><label for="emi" class="labelemail"><span class="contentemail">Email</span></label><span id="errore" style="color: Red; display: none">* Invalid Email(format:xyz@bmsce.ac.in)</span>

                        <input type="password" name="password" id="pasi" value="" size="50" required/><label for="pasi" class="labelemail"><span class="contentemail">Password</span></label>
                      <input type="password" name="passconf" id="cnpasi" value="" size="50" required /><label for="cnpasi" class="labelemail"><span class="contentemail">RePass</span></label>

                    <p><input type="submit" name="submit" value="Submit" class="button" /></p>
                    <p class="message">Already registered? <a href="login.php">Log In</a></p>

                </form>
            </div>
            </div>
        </div>
        <?php
        if(isset($_POST["submit"])){

            $name=$_POST['name'];
            $branch=$_POST['branch'];
            $interests=$_POST['interests'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $con=mysqli_connect('localhost','root','') or die(mysql_error());
            mysqli_select_db($con,'demo1') or die("cannot select DB");

            $query=mysqli_query($con,"SELECT * FROM teacherdem WHERE email='".$email."'");
            $numrows=mysqli_num_rows($query);
            if($numrows==0)
            {
            $sql="INSERT INTO teacherdem(name,branch,interests,email,password) VALUES('$name','$branch','$interests','$email','$password')";

            $result=mysqli_query($con,$sql);
                if($result){

          header("Location: login.php");
          exit;
            } else {
            echo "Failure!";
            }

            } else {
            echo "That email already exists! Please try again with another.";
            }

        }
        ?>
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
