<?php
  header('Content-type: text/css; charset: UTF-8')
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
@import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');
@import url('https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed&display=swap');
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

.content {
  min-height: calc(100vh - 40px);
}
.footer {
  position: absolute;
  top: 90%;
  background-color: black;
}
.nfont{
  font-family: 'Fira Sans Extra Condensed', sans-serif;
}
.right {
  float :right;
  position: absolute;
  bottom:2%;
  left:80%;
}
.me{
  padding: 10px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.me:hover {
    opacity: 0.7;
}
.bold{
  font-weight: bold;
}

.pos{
  position:absolute;
  top:1px;
  left:170px;
}

.right{
  float: right;
}
.form {
  position: absolute;
  top: 90px;
  left: 850px;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.text-why{
  position:absolute;
  top: 150px;
  left: 250px;
  font-size: 20px;
  color: #330000;
}
.sign_border_sign{
  border: 1.5px solid white;
}
.font{
  font-family: 'Audiowide', cursive;
}

.button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background:red;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.button:hover,.button:active,.button:focus {
  background: #FF4500;
}
.message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}

.toto{
  position: absolute;
  top: 20%;
  left: 7%;
}

.headii{
  font-family: 'Audiowide', cursive;
  font-size: 50px;
}

/*body {
  background: #76b852s; /* fallback for old browsers
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
*/

.animation-area{
  background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
  background-size: 400%;
  width: 100%;
  height: 100vh;
  position: relative;
  animation: change 13s ease-in-out infinite;
}

@keyframes change{
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
.meee {
  background-color: white;
}
h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}


.class-a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

.button2 {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.button2:active {
	transform: scale(0.95);
}

.button2:focus {
	outline: none;
}

.button2.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
  position: absolute;
  top: 20%;
  left: 45%;
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25),
			0 10px 10px rgba(0,0,0,0.22);
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.classh1 {
  	font-weight: bold;
  	margin: 0;
}
.classp {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}

	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}


#navbar
	{
  		overflow: hidden;
  		background-color: #333;
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

  input:focus:invalid {
  /* insert your own styles for invalid form input */
  box-shadow: 0px 0px 4px 2px red;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: none;
}

li {
  float: left;
}

li a {
  display: block;
  color: red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  color : black;
  background-color: none;
}

</style>
