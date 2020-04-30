<?php
session_start() ;
$con= mysqli_connect('localhost','root','') or die(mysql_error()) ;
mysqli_select_db($con,'demo1') or die("cannot select DB");
if(!$con)
{
	echo'connection error:'.mysqli_connect_error() ;
}

?>
<?php
    if(isset($_POST['submit']))
    {
       session_start() ;
      // $em2 = $_SESSION['sess_user'];
       $_SESSION['submit']=$_POST['submit'] ;
       header('Location: answer.php') ;
       //header('Location:allques.php') ;
    }
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> QUEStions </title>
</head>
<style @import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');>

	.animation-area
	{
  		background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
  		background-size: 600%;
		background-repeat:no-repeat ;
  		position: relative;
  		animation: change 13s ease-in-out infinite;

	}

	@keyframes change
	{
  		0%{
    			background-position: 0% 50%;
  		}
  		50%{
    			background-position: 100% 50%;
  		}
  		100%{
    			background-position: 0% 50%;
  		}
	}

	#navbar
	{
  		overflow: hidden;
  		background-color: #333;
			z-index: 300;
	}

	#navbar a
	{
  		float: left;
  		display: block;
  		color: #f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}

	#navbar a:hover
	{
  		background-color: #ddd;
  		color: black;
	}
	#navbar a.active
	{
 		 background-color:  #0047b3;
  		color: white;
	}
	.sticky
	{
  		position: fixed;
  		top: 0;
  		width: 100%;
	}

	.sticky + .content
	{
  		padding-top: 60px;
	}

	#navbar .sign
	{
		float :right ;
	}

	.fontt
	{
  		font-family: 'Audiowide', cursive;
	}

	.pos
	{
		position:absolute ;
		top:1px ;
		left:170px ;
	}

	.boxx
	{
		margin-top:40px ;
		margin-left:300px ;
		background:rgba(128, 0, 128,0.5) ;
		background-image:url(".jpg") ;
		background-position: center;
		padding:10px ;
		text-align:center ;
		width: 50% ;
		border-radius:10% ;
	}
	.vl {
	border-left: 3px solid green;
	min-height: 100%;
	position: absolute;
	left: 73%;
	margin-left: -3px;
	top: 20%;
}
.vl2 {
	border-left: 3px solid green;
	min-height: 100%;
	position: absolute;
	left: 18%;
	margin-left: -3px;
	top: 20%;
}

	::placeholder
	{
		color:black ;
	}

	button
	{
  		background-color:#0047b3;;
  		color:black;
		font-size:20 ;
  		padding: 20px;
  		border-radius: 25px;
  		cursor: pointer;
  		width:30%;
  		opacity: 0.9;
	}

	button:hover
	{
		outline: none;
  		opacity: 1;
		outline: none;
	}
	button:active
	{
		outline: none;
  		background-color:#000d33;
  		box-shadow: 0 5px #666;
  		transform: translateY(4px);
		outline: none;
	}

	.me
	{
  		padding: 10px;
		  font-size: 20px;
  		width: 20px;
  		text-align: center;
  		text-decoration: none;
  		margin: 5px 2px;
	}
	.me:hover
	{
    		opacity: 0.7;
	}
 	.right
	{
  		float: right;
	}

  .card {                                                                     /* from here */
  	position: absolute;
    display: none;
    width: 30%;
    height: 33%;
    left: 50;
    right: 0;
  	background-color: #d8f0e5;
    z-index: 1;
    text-align: center;
    }
  .q {
  	text-align: center;
  width: 70%;
  height: 150px;
  margin: auto;
  font-family: coda;
  }
  .q0 {
  	border-radius: 50%;
  width: 100px;
  height: 100px;
  display: inline-block;
  float: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #FF6347;
  }
  .q0:hover{
  	background-color:#00FFFF;
  }
  .q00 {
  	border-radius: 50%;
  width: 100px;
  height: 100px;
  display: inline-block;
  float: right;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #FF6347;
  }
  .q00:hover{
  	background-color:#00FFFF;
  }
  .buttonn {
  	background-color: green;
  	border: none;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	margin: 1px 1px;
  	cursor: pointer;
  	-webkit-transition-duration: 0.4s;
  	transition-duration: 0.4s;
    }
    .buttonn:hover {
  	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }

    #navbar button.sign                                        /* changes mainly in name and colour */
  	{
  		float: right;
  		display: block;
  		background-color:#333;
  		border:none;
    		color:#f2f2f2;
    		text-align: center;
    		padding: 14px 40px;
    		text-decoration: none;
    		font-size: 17px;
  	}
  	#navbar button.sign:hover
  	{
    		background-color: #ddd;
    		color: black;
  	}

		.container {
		  display: block;
		  position: relative;
		  padding-left: 35px;
		  margin-bottom: 12px;
		  cursor: pointer;
		  font-size: 22px;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}

		/* Hide the browser's default radio button */
		.container input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		}

		/* Create a custom radio button */
		.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  background-color: #eee;
		  border-radius: 50%;
		}

		/* On mouse-over, add a grey background color */
		.container:hover input ~ .checkmark {
		  background-color: #ccc;
		}

		/* When the radio button is checked, add a blue background */
		.container input:checked ~ .checkmark {
		  background-color: #2196F3;
		}

		/* Create the indicator (the dot/circle - hidden when not checked) */
		.checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		}

		/* Show the indicator (dot/circle) when checked */
		.container input:checked ~ .checkmark:after {
		  display: block;
		}

		/* Style the indicator (dot/circle) */
		.container .checkmark:after {
		 	top: 9px;
			left: 9px;
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: white;
		}

		.gohere1{
			position: absolute;
			top:20%;
			left: 3%;
		}
		.gohere2{
			position: absolute;
			top:20%;
			left: 83%;
		}
		.footer {
		  position: sticky;
		  top: 90%;
		  background-color: black;
		}
</style>
<script>
</script>
<body>
<a style="text-decoration:none;"href="home.php"><h1 class="fontt">XCH<span style="color:red;">ange</span></h1></a><img src="bmscex.png" alt="logo" style="width:40px;height:40px;" class="pos" >
<div id="navbar">
<a href="home.php"><i class="fa fa-home"></i>&nbspHome</a>
<a href="questions.php"><i class="fa fa-question"></i>ASK&nbsp</a>
<a class="active" href="allques.php">Questions&nbsp<i class="fa fa-question"></i></a>
<a href="allans.php">Answers&nbsp<i class="fa fa-server"></i></a>
<a href="">About Us&nbsp<i class="fa fa-address-book"></i></a>
<button class="sign" onclick="on()">Profile</button>           <!--changes-->
</div>
<div class="card" id="prof" onclick="off()">                                     <!--from here-->
<br>
<div class="n">
	<span>Username: </span><?php
  $email = $_SESSION['sess_user'];
  $query=mysqli_query($con,"SELECT * FROM userprofile WHERE email='".$email."'");
  $numrows=mysqli_num_rows($query);
  while($row=mysqli_fetch_assoc($query))
  {
  $dbusername=$row['username'];
  }
  echo $dbusername;
  ?><br>
	<span>Email: </span><?php
 	echo $email;
  	?>
  </div><br><br>
  <div class="q">
<a href="userquestion.php">
<div class="q0">
<p align="center" style="color: purple;" class="w1">
<br>Questions<i class="fa fa-question"></i>
</p>
</div>
</a>
<a href="useranswer.php">
<div class="q00">
<p align="center" style="color:purple;" class="w2">
<br>Answers<i class="fa fa-server"></i>
</p>
</div>
</a>
</div>
<div>
	<a href="logout.php" class="buttonn">Logout</a>
</div>
</div>
<div class="vl2"></div>
<div class="gohere1">
<form action="" method="get">
	<label class="container">All
  <input type="radio" name="radio" value="">
  <span class="checkmark"></span>
</label>
<label class="container">CSE
  <input type="radio" name="radio" value="CSE">
  <span class="checkmark"></span>
</label>
<label class="container">ISE
  <input type="radio" name="radio" value="ISE">
  <span class="checkmark"></span>
</label>
<label class="container">ECE
  <input type="radio" name="radio" value="ECE">
  <span class="checkmark"></span>
</label>
<label class="container">MECH
  <input type="radio" name="radio" value="MECH">
  <span class="checkmark"></span>
</label>
<hr>
<label class="container">Unanswered
  <input type="radio" name="radio" value="unanswered">
  <span class="checkmark"></span>
</label>
<label class="container">Answered
  <input type="radio" name="radio" value="answered">
  <span class="checkmark"></span>
</label>
<label class="container">Unsolved
  <input type="radio" name="radio" value="unsolved">
  <span class="checkmark"></span>
</label>
<label class="container">Solved
  <input type="radio" name="radio" value="solved">
  <span class="checkmark"></span>
</label>
<input type="submit" name="subm" value="Submit">
</form>
</div>

<div class="vl"></div>
<?php
if(isset($_GET["subm"])){
	$varial = $_GET["radio"];
	if($varial == ""){
		$sql = 'select * from ques ' ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
		    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
		    <button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
		    <h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
		    <h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
		    </button>
		    </form>
		<?php }
	}
	if($varial == "unanswered"){
		$sql = 'select * from ques where question_id not in (select question_id from ans); ' ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
		    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
		    <button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
		    <h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
		    <h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
		    </button>
		    </form>
		<?php }
	}
	if($varial == "answered"){
		$sql = 'select * from ques where question_id in (select question_id from ans); ' ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
		    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
		    <button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
		    <h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
		    <h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
		    </button>
		    </form>
		<?php }
	}
	if($varial == "solved"){
		$sql = 'select * from ques where flag=1' ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
		    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
		    <button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
		    <h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
		    <h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
		    </button>
		    </form>
		<?php }
	}
	if($varial == "unsolved"){
		$sql = "select * from ques where flag= 0 " ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
				<button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
				<h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
				<h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
				</button>
				</form>
		<?php }
	}
	if($varial == "CSE"){
		$sql = "select * from ques where tag='CSE'" ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
				<button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
				<h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
				<h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
				</button>
				</form>
		<?php }
	}
	if($varial == "ISE"){

		$sql = "select * from ques where tag='ISE'" ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
				<button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
				<h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
				<h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
				</button>
				</form>
		<?php }
	}
	if($varial == "ECE"){
		$sql = "select * from ques where tag='ECE'" ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
				<button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
				<h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
				<h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
				</button>
				</form>
		<?php }
	}
	if($varial == "MECH"){
		$sql = "select * from ques where tag='MECH'" ;
		$result = mysqli_query($con, $sql) ;
		$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
		mysqli_free_result($result) ;
		foreach($queses as $ques)
		{?>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
				<button id="boxx" class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
				<h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['email']) ;?></h4>
				<h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
				</button>
				</form>
		<?php }
	}
}
?>

<br><br>
<footer class="footer">
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
  <span style="color:white;"class="right">&copy; Copyright 2019 XCHange Corporation &#174;<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Partnered with Stack Overflow&trade;</span>

</footer>

<script>
var navbar = document.getElementById("navbar") ;
var sticky = navbar.offsetTop ;

window.onscroll =  function(){myFunction()} ;

function myFunction()
{
  	if (window.pageYOffset >= sticky)
	{
    		navbar.classList.add("sticky") ;
  	}
	else
	{
    		navbar.classList.remove("sticky");
  	}
}

function required()
{
	var ques = document.getElementById("place").value ;
	if(ques.length==0)
	{
		alert("first write your doubt") ;
		return false ;
	}
}
document.getElementById("prof").style.display="none";
function on() {
  document.getElementById("prof").style.display="block";
}
function off() {
	document.getElementById("prof").style.display="none";
}

</script>
</body>
</style>
</html>
