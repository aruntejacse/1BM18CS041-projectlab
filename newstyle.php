<?php
  header('Content-type: text/css; charset: UTF-8')
?>
<style>
html,
body {
    margin: 0;
    font-size: 100%;
    background: #fff;
    font-family: 'Raleway', sans-serif;
    scroll-behavior: smooth;
}

body a {
    text-decoration: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
cursor: pointer !important;
}
.btn,
button {
    cursor: pointer !important;
}


a:hover {
    text-decoration: none;
    opacity: 0.8;
}

input[type="button"],
input[type="submit"],
input[type="text"],
input[type="email"],
input[type="search"] {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    font-family: 'Oswald', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    letter-spacing: 1px;
    font-weight: 400;
    font-family: 'Oswald', sans-serif;
}

p {
    font-size: 0.9em;
    color: #2e2e2e;
    line-height: 1.9em;
    letter-spacing: 1px;
}

ul {
    margin: 0;
    padding: 0;
}

/*-- header --*/

/* header */

/* CSS Document */

header {
    position: absolute;
    z-index: 9;
    width: 100%;
}

.toggle,
[id^=drop] {
    display: none;
}

/* Giving a background-color to the nav container. */

nav {
    margin: 0;
    padding: 0;
}


#logo a {
    float: left;
    display: initial;
    margin: 0;
    letter-spacing: 1px;
    color: #fff;
    padding: 0;
    font-size: 0.8em;
    font-weight: 800;
    text-transform: capitalize;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.37);
    font-family: 'Oswald', sans-serif;

}



/* Since we'll have the "ul li" "float:left"
 * we need to add a clear after the container. */

nav:after {
    content: "";
    display: table;
    clear: both;
}

/* Removing padding, margin and "list-style" from the "ul",
 * and adding "position:reltive" */

nav ul {
    float: right;
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative;
}

/* Positioning the navigation items inline */

nav ul li {
    margin: 0px 0.3em;
    display: inline-block;
    float: left;
}

/* Styling the links */

nav ul.menu li a {
    color: #fff;
    text-transform: capitalize;
    font-size: 0.9em;
    letter-spacing: 2px;
    padding-left: 0;
    padding-right: 0;
    padding: 0.5em 1.5em;
    background: transparent;
    font-weight: 400;
}
/* Arun sign up form style*/
.form {
  position: absolute;
  top: 150px;
  left: 850px;
  z-index: 1;
  background: #FFFFFF;
  max-width: 500px;
  height: 90%;
  margin: 0 auto 20px;
  padding: 40px 40px 3px 40px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input:not(.button) {
  border: none;
  border-bottom: 2px solid black;
  width: 90%;
  padding-top: 40px;
  outline: none;
}
.form label {
  position: relative;
  right: 370px;
  transform: translateY(-50px);
  pointer-events: none;
}
.message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
  padding-bottom: 2px;
}
.contentemail {
  position: absolute;
  top: 25px;
  color: black;
  transition : all 0.3s ease;
}
.form input:focus+.labelemail .contentemail,
.form input:valid+.labelemail .contentemail {
  transform : translateY(-100%);
  font-size: 14px;
  color: red;
}
.button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: none;
  background:red;
  width: 100%;
  border: none;
  padding: 10px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.button:hover,.button:active,.button:focus {
  background: #FF4500;
}

.text-why{
  position:absolute;
  top: 250px;
  left: 250px;
  font-size: 20px;
  color: white;
}

nav ul li ul li:hover {
    background: transparent;

}


/* Background color change on Hover */

.menu li.active a {
    color: #03f4eb;
}

/* Hide Dropdowns by Default
 * and giving it a position of absolute */

nav ul ul {
    display: none;
    position: absolute;
    /* has to be the same number as the "line-height" of "nav a" */
    top: 30px;
    background: #fff;
    padding: 10px;
}

/* Display Dropdowns on Hover */

nav ul li:hover > ul {
    display: inherit;
}

/* Fisrt Tier Dropdown */

nav ul ul li {
    width: 170px;
    float: none;
    display: list-item;
    position: relative;
    margin: 0;
}

nav ul.menu li ul li a {
    color: #333;
    padding: 5px 10px;
    display: block;
}

nav ul.menu li ul li a:hover {
    color: #03f4eb;
	background:transparent;
}

/* Second, Third and more Tiers
 * We move the 2nd and 3rd etc tier dropdowns to the left
 * by the amount of the width of the first tier.
*/

nav ul ul ul li {
    position: relative;
    top: -60px;
    /* has to be the same number as the "width" of "nav ul ul li" */
    left: 170px;
}


/* Change ' +' in order to change the Dropdown symbol */

li > a:only-child:after {
    content: '';
}


/* Media Queries
--------------------------------------------- */

@media all and (max-width:992px) {

    #logo {
        display: block;
        padding: 0;
        width: 100%;
        text-align: center;
        float: none;
    }

    nav {
        margin: 0;
    }

    nav a {
        color: #333;
    }

    /* Hide the navigation menu by default */
    /* Also hide the  */
    .toggle + a,
    .menu {
        display: none;
    }

    /* Stylinf the toggle lable */
    .toggle {
        display: block;
        padding: 6px 15px;
        font-size: 16px;
        text-decoration: none;
        border: none;
        float: right;
        margin-right: 0em;
        background-color: #fff;
        color: #1b1d1d;
        text-transform: capitalize;
        font-weight: 400;
        cursor: pointer !important;
    }

    .menu .toggle {
        float: none;
        text-align: center;
        margin: auto;
        width: 30%;
        padding: 5px;
        font-weight: normal;
        font-size: 15px;
        letter-spacing: 1px;
    }

    .toggle:hover {
        color: #333;
        background-color: #fff;
    }

    /* Display Dropdown when clicked on Parent Lable */
    [id^=drop]:checked + ul {
        display: block;
        background: #fff;
        padding: 15px 0;
        text-align: center;
        width: 80%;
        margin: 0 auto;
    }

    /* Change menu item's width to 100% */
    nav ul li {
        display: block;
        width: 100%;
        padding: 5px 0;
    }

    nav ul ul .toggle,
    nav ul ul a {
        padding: 0 40px;
    }

    nav ul.menu li a {
        color: #312f2f;
    }

    nav a:hover,
    nav ul ul ul a {
        background-color: transparent;
    }

    nav ul li ul li .toggle,
    nav ul ul a,
    nav ul ul ul a {
        padding: 14px 20px;
        color: #312f2f;
        font-size: 15px;
    }


    nav ul li ul li .toggle,
    nav ul ul a {
        background-color: #fff;
    }

    nav ul ul li a {
        font-size: 15px;
    }

    /* Hide Dropdowns by Default */
    nav ul ul {
        float: none;
        position: static;
        color: #ffffff;
        /* has to be the same number as the "line-height" of "nav a" */
    }

    /* Hide menus on hover */
    nav ul ul li:hover > ul,
    nav ul li:hover > ul {
        display: none;
    }

    /* Fisrt Tier Dropdown */
    nav ul ul li {
        display: block;
        width: 100%;
        padding: 0;
    }

    nav ul li {
        margin: 0;
    }

    nav ul ul ul li {
        position: static;
        /* has to be the same number as the "width" of "nav ul ul li" */
    }

    .login-icon {
        text-align: right;
    }

    .login-icon span {
        margin-right: 1em;
    }
}

@media all and (max-width:568px) {
    [id^=drop]:checked + ul {
        display: block;
        background: #fff;
        padding: 15px 0;
        text-align: center;
        width: 100%;
        margin: 0 auto;
    }

    .menu .toggle {
        float: none;
        text-align: center;
        margin: auto;
        width: 70%;
    }

}

.login-icon p {
    color: #fff;
}

.login-icon span {

    color: #fcd000;
}

/*-- //header --*/
.order-info {
    border-bottom: 1px solid rgba(255, 255, 255, 0.13);
}
/*-- //header --*/

.main-content {
    background: url(banner1.jpg) center no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-size: cover;
    position: relative;
    min-height: 50em;
}

.layer {
    min-height: 50em;
    background: rgba(0, 0, 0, 0.52);
}

.banner-info-w3layouts {
    padding-top: 23em;
    text-align: center;
}

.banner-info-w3layouts h3 {
    font-size: 2.5em;
    font-weight: 400;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.37);
    text-transform: capitalize;
    letter-spacing: 5px;
}

.banner-info-w3layouts h6 {
    font-size: 2em;
    font-weight: 400;
    letter-spacing: 1px;
    display: block;
    color: #fcd000;
    font-family: 'Pacifico', cursive;
}

.read-more {
    margin-top: 1.2em;
}

a.read-more {
    background: #03f4eb;
    color: #fff;
    padding: 0.8em 3em;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.15);
    font-size: 13px;
    display: inline-block;
    border: transparent;
    transition: all 500ms ease;
    text-align: justify;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2px;
}


.middle ul.social li {
    margin: 0 0.8em;
    display: inline-block;
}

.middle ul.social li a {
    font-size: 13px;
    color: #fff;
    display: block;
    text-align: center;
}

.middle-right h6 {
    font-size: 1em;
    color:#03f4eb;
    font-weight: 400;
    letter-spacing: 2px;
}

/*-- //banner --*/

/*-- //heading --*/

#about {
    background: #fff;
}

.content-left-bottom h4 {
    font-size: 1.7em;
    letter-spacing: 6px;
    line-height: 1.5em;
    margin: 1em 0;
    color: #272525;
    font-weight: 700;
}

.content-left-bottom {
    margin-top: 5em;
}

/*--*/

.ab-info {
    text-align: center;
}

.ab-info h4 {
    font-size: 1em;
    color: #ffc80a;
    margin: 2em 0 0em 0;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.list-group-image {
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    transition: 0.5s all;
    background: rgb(236, 237, 239);
    padding: 8px;
}

.ab-info p {
    text-align: center;
    color: #fff;
    font-size: 1em;
    font-weight: 400;
    font-family: 'Oswald', sans-serif;
}

.ab-content img {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.15);
    transition: all 500ms ease;
    width: 68%;
}

.ab-content-inner {
    padding: 2em 1em;
}

.ab-info h5 {
    font-size: 1.1em;
    letter-spacing: 0px;
    font-weight: 700;
    color: #555;
    line-height: 1.7em;
}

/*--*/

/*-- popup --*/

.pop-overlay {
    position: absolute;
    top: 0px;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 0ms;
    visibility: hidden;
    opacity: 0;
    z-index: 999;
}

.pop-overlay:target {
    visibility: visible;
    opacity: 1;
}

.popup {
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    margin: 8em auto;
    padding: 3em 1em;
}

.popup p {
    font-size: 15px;
    color: #666;
    letter-spacing: .5px;
    line-height: 30px;
}

.popup h2 {
    margin-top: 0;
    color: #fff;

}

.popup .close {
    position: absolute;
    top: 5px;
    right: 15px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #000;
}

.popup .close:hover {
    color: #30c39e;
}


/*-- //popup --*/

/*-- //banner --*/

.services {
    background: #c20d00;
}

h3.tittle,
h3.tittle.two {
    font-size: 2.3em;
    font-weight: 400;
    color: #33353a;
    text-shadow: 0 0 0.5px rgba(58, 57, 57, 0.25);
    text-transform: capitalize;
}

h3.tittle.two {
    color: #fff;
}

.sub-tittle {
    font-size: 0.35em;
    color: #ffa801;
    letter-spacing: 1px;
    display: block;
    text-transform: uppercase;

}

.content-left span {
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
    color: #03A9F4;
    font-size: 16px;
    padding-left: 10px;
}

span.title {
    color: #fcd000;
    text-shadow: 0 0 0.5px rgba(58, 57, 57, 0.25);
    font-size: 1.4em;
    letter-spacing: 2px;
    display: block;
    font-family: 'Pacifico', cursive;
}

.content-right-bottom p {
    line-height: 2em;
}

/*-- //about -*/
/*-- features --*/

.heading-grid {
    margin-bottom: 6em;
}
.banner-bottom span.fa {
    font-size: 30px;
	color: #03f4eb;
}
.inner-info h4 {
    text-transform: capitalize;
    font-size: 19px;
    letter-spacing: 1px;
    font-weight: 400;
}
/*-- //features --*/
/*-- team --*/
.team-grids {
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.team-grids h4 {
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.team-grids h6 {
    font-size: 17px;
    color: #ccc;
    letter-spacing: 1px;
    font-family: initial;
    font-style: italic;
}

.social-icons-section a {
    color: #eee;
    padding: 10px 0;
    display: block;
    font-size: 15px;
}


.team-info {
    position: absolute;
    bottom: -227px;
    margin: 0;
    background: rgba(0, 0, 0, 0.5);
    padding: 2em 0;
    -webkit-transition: .5s all;
    transition: .5s all;
    -moz-transition: .5s all;
    width: 82%;
    text-align: center;
}

.team-grids:hover div.team-info {
    bottom: 0;
}

.social-icons-section,
.team-grids h6 {
    margin-top: 0.5em;
}

.caption {
    padding: 0px;
}

.team-info .social-icons-section a {
    margin: 0em .5em;
}
.social-icons-section {
    background: #333;
    padding: 10px 0px;
    margin-top: 0;
    display: inline-block;
    width: 18%;
    float: left;
}
.team-grids img {
    width: 82%;
    float: left;
}

/* team responsive */
@media(max-width:1080px) {
    .team-grids h4 {
        font-size: 1em;
    }

    .about_grids h3 {
        font-size: 22px;
    }

    .about-in .card {
        padding: 1.5em .5em;
    }
}

@media(max-width:1024px) {

}

@media(max-width:991px) {

}

@media(max-width:736px) {

}

@media(max-width:480px) {

}

@media(max-width:440px) {

}

@media(max-width:414px) {

}

@media(max-width:384px) {

}

@media(max-width:320px) {

}

/* //team responsive */
/* //team */

.about-text-grid a {
    background: #03f4eb;
    padding: 15px 30px;
    display: inline-block;
    color: #fff;
    font-size: 16px;
    letter-spacing: 2px;
    text-transform: capitalize;
}
/*-- stats --*/
.stats h3.heading {
    color: #f8f9fa;
}

.stats p {
    color: #ccc;
}

.stats-left h4 span {
    font-size: 50px;
    font-weight: 600;
    color: #0be881;
}

.stats-left h4 {
    color: #fff;
}

.stats-right h4 {
    font-size: 2.4em;
    font-weight: 700;
    margin: 15px 0;
    color: #fff;
}


.stats-right span.fa {
    color: #212529;
    font-size: 20px;
    background: rgb(248, 249, 250);
    width: 65px;
    height: 65px;
    text-align: center;
    line-height: 65px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
}

.stats {
    background: url(../images/banner3new2.jpg) no-repeat 0px 0px;
    background-size: cover;
    position: relative;
}

.brands a span.fa {
    font-size: 3em;
    color: #333;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    -o-transition: 0.5s all;
}

/*-- //stats --*/

/*-- middle-section --*/

.section-middle {
    background: #111;
}
.section-middle .about-text-grid1 h3 {
    color: #eee;
    max-width: 430px;
}
.section-middle h4 {
    text-transform: uppercase;
    color: #eee;
    letter-spacing: 2px;
    font-size: 20px;
}
.section-middle h4 span {
    width: 60px;
    height: 2px;
    background: #fff;
    display: inline-block;
    margin-bottom: 5px;
    margin-right: 15px;
}
.about-text-grid1 a {
    background: none;
    padding: 13px 30px;
    display: inline-block;
    color: #fff;
    border: 2px solid #fff;
    font-size: 16px;
    letter-spacing: 2px;
    text-transform: capitalize;
}
/*-- //middle-section --*/
.about-right p {
    color: #fff;
}
.about-text-grid h3, .about-text-grid1 h3 {
    display: inline-block;
    font-size: 2.5em;
    font-weight: 400;
    letter-spacing: 1px;
}
section#gallery {
    position: relative;
}

.gallery-wrap {
    margin: 0 auto;
}

.gal-img {
    padding: 10px;
}

.gal-img img {
    border-radius: 0;
    -moz-transition: 0.5s all;
    transition: 0.5s all;
    margin-bottom: 1.1em;
}

.gal-img:hover.gal-img img {
    box-shadow: 0 20px 40px -10px rgba(0, 0, 0, .3);
}

.gal-img a span {
    font-size: 0.9em;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 400;
    color: #1e272e;
    text-shadow: 0 0 0.5px rgba(58, 57, 57, 0.25);
    background: #ffffff;
    display: block;
    padding: 1em;
    margin-bottom: 15px;
}
/* testimonials */
.testi {
        background: url(../images/banner3.jpg) no-repeat 0px 0px;
    background-size: cover;
    position: relative;;
}

h6.b-w3ltxt {
    font-weight: 400;
    font-size: 20px;
    letter-spacing: 1px;
    text-transform: capitalize;
}
h6.b-w3ltxt span {
    font-weight: normal;
    color: #03f4eb;
    text-transform: capitalize;
    font-size: 16px;
}
.testi-cgrid p {
	line-height: 1.8em;
}
.testi-cgrid p span.fa {
	color: #03f4eb;
}

.testi-icon img{
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 5px solid #f6f6f6;
    background: #eee;
}

.testi-icon span.fa {
    font-size: 1.4em;
}
.testi-cgrid {
    background: #fff;
    padding: 2em 1em;
}
.border-right-grid{
	 border-right: 8px solid #000000;

}
.border-left-grid{
	 border-left: 8px solid #000000;

}
/* //testimonials */
/*-- contact --*/
.contact-title {
    font-size: 30px;
    font-weight: 600;
    letter-spacing: 1px;
}
.contact_grid_right input[type="text"], .contact_grid_right input[type="email"], .contact_grid_right textarea {
    outline: none;
    padding: 13px 15px;
    font-size: 16px;
    color: #777;
    width: 100%;
    letter-spacing: 1px;
    border: none;
    background: #fff;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
}
.contact_grid_right textarea {
    min-height: 120px;
    resize: none;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
    background: none;
    background: #fff;
}
.contact-style-w3ls p a{
    font-size: 17px;
    line-height: 2em;
    letter-spacing: 1px;
    color: #707579;
}
.contact-style-w3ls p span.fa {
    color: #03f4eb;
    width: 25px;
}
.contact_left_grid button.btn {
    background: #03f4eb;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 2px;
    padding: 13px;
    display: inline-block;
    border-radius: 0;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
}
.contact{
    background: #f6f6f6;
}
/*-- //contact --*/
/* footer */

.footer-content {
    background: url(../images/banner3new2.jpg) center no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-size: cover;
    min-height: 28em;
}

hr {
    border-top: 1px solid rgba(251, 247, 247, 0.1);
}

.layer.footer-1 {
    min-height: 28em;
    background: rgba(0, 0, 0, 0.82);
}

.footer-top-inner-w3ls {
    padding: 5em 2em 3em 2em;
}

.footer-content h2 a {
    text-transform: capitalize;
    font-size: 1.2em;
    letter-spacing: 1px;
    font-weight: 400;
    color: #03f4eb;
}

/* footer grids */

ul.list-info-w3pvt {
    list-style: none;
}

h4.footer-title {
    color: #777;
    text-transform: capitalize;
}

.footerv3-top p {
    font-size: 1em;
    color: #a3b1bf;
    margin: 1em 0;
    line-height: 1.5em;
}

.footer p a {
    color: #fff;
    text-decoration: underline;
}

.last-w3ls-contact p {
    display: inline-block;
    vertical-align: middle;
    color: #fff;
    font-size: 0.85em;
    letter-spacing: 1px;
    margin: 0;
}

.footer-top p {
    padding-right: 6em;
    color: #fff;
}

.last-w3ls-contact p a:hover {
    color: #15b915;
}

.list-info-w3pvt li a {
    color: #fff;
    font-size: 0.85em;
    letter-spacing: 1px;
}

.list-info-w3pvt li a:hover {
    opacity: 0.8;
}

h3.w3pvt_title {
    font-size: 1.2em;
    color: #fff;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.last-w3ls-contact a {
    color: #fff;
}

.w3ls-icons li {
    display: inline-block;
    margin: 0 1em;
}

.w3ls-icons li a span {
    color: #fff;
}

.w3ls-icons li a span:hover {
    color: #ffc80a;
}

/* //footer */
.footer-text input[type="email"] {
    outline: none;
    padding: 12px 15px;
    color: #fff;
    font-size: 13px;
    width: 85%;
    border: none;
    background: none;
    letter-spacing: 1px;
}

.newsletter {
    position: relative;
    margin-top: 2em;
}

button.btn1 {
    color: #808080;
    border: none;
    padding: 10px 0;
    outline: none;
    text-align: center;
    text-decoration: none;
    background: none;
    cursor: pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    float: right;
    width: 15%;
}

.footer-text form {
    border: 1px solid #808080;
    width: 100%;
    margin-top: 20px;
}
.footer-text p {
    color: #fff;
}
/* copyright */

p.copy-right-grids {
    letter-spacing: 2px;
    color: #fff;
}

p.copy-right-grids a {
    color: #fff;
}

/* //copyright */

a.move-top {
    text-align: center;
}

a.move-top span {
    color: #fff;
    width: 36px;
    height: 36px;
    border: transparent;
    line-height: 2em;
    background: #626c733b;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
}

/*-- //footer --*/

/*-- Responsive design --*/

@media screen and (max-width: 1440px) {

    .main-content,
    .layer {
        min-height: 45em;
    }

    .banner-info-w3layouts {
        padding-top: 18em;

    }
}

@media screen and (max-width: 1280px) {
    .test-info {
        padding: 5em 2em 0 2em;
        width: 75%;
    }
}

@media screen and (max-width: 1080px) {

    .main-content,
    .layer {
        min-height: 40em;
    }

    .banner-info-w3layouts {
        padding-top: 17em;
    }

    .content-left-bottom {
        margin-top: 3em;
    }

    .ab-info h4 {
        font-size: 0.9em;
        margin: 2em 0 0em 0;
    }

    .tab-wrap {
        padding: 3em 1em;
    }

    .test-info {
        padding: 5em 2em 0 2em;
        width: 70%;
    }

    .footer-top p {
        padding-right: 1em;
    }

    h3.tittle,
    h3.tittle.two {
        font-size: 2.2em;
    }
}


@media screen and (max-width: 992px) {

    .popup {
        width: 50%;
    }

    .content-left-bottom h4 {
        font-size: 1.5em;
        letter-spacing: 2px;
    }

    .content-left-bottom {
        margin-top: 2em;
    }

    .ab-content {
        width: 50%;
        float: left;
    }

    .adress-info:nth-child(2) {
        margin: 1.5em 0;
    }

    .tab-main {
        padding: 16px 0;
        width: 90%;
    }

    .test-info {
        padding: 5em 2em 0 2em;
        width: 100%;
    }

    .banner-info-w3layouts {
        padding-top: 15em;
    }

    .main-content,
    .layer {
        min-height: 38em;
    }

    h3.tittle,
    h3.tittle.two {
        font-size: 2em;
    }
	.about-text-grid h3, .about-text-grid1 h3 {
    font-size: 2em;
}
.about-text-grid {
    margin-top: 1.5em;
}
}


@media screen and (max-width:768px) {
    .tab-wrap {
        padding: 2em 0em;
    }

    form#contactform1 {
        margin-bottom: 3em;
        padding: 0 0 3em 0;
    }
}

@media screen and (max-width: 767px) {
    .tab-wrap {
        padding: 2em 0em;
        margin-top: 1em;
    }

    .gal-img {
        padding: 10px;
        float: left;
        width: 50%;
    }

    .footer-top-inner-w3ls {
        padding: 2em 2em 3em 2em;
    }

    .adress-info span {
        font-size: 2em;
        margin-bottom: 1em;
    }

    .middle,
    .middle-right,
    .order-left-content,
    .order-right-content {
        text-align: center !important;
    }

    .tab-main label {
        padding: 15px 50px;
    }

    .test-info {
        padding: 1em 2em 0 0em;
        width: 100%;
    }

    .footer-content,
    .layer.footer,
    #testimonials {
        min-height: 20em;
    }
}

@media screen and (max-width: 736px) {
    .banner-info-w3layouts {
        padding-top: 13em;
    }

    .main-content,
    .layer {
        min-height: 34em;
    }

    .content-left-bottom {
        margin-top: 0em;
    }
}

@media screen and (max-width: 667px) {

    h3.tittle,
    h3.tittle.two {
        font-size: 1.8em;
    }

    .tab-main label {
        padding: 10px 30px;
    }

    h3.tittle.order {
        font-size: 2em;
    }

    .footer-top-inner-w3ls {
        padding: 1em 0em 1em 0em;
    }

    h3.w3pvt_title {
        font-size: 1em;
    }

    .read-more {
        margin-top: 1em;
    }

    .tab-main section {
        padding: 2em 0 2em 0;
    }
}

@media screen and (max-width: 640px) {
    .banner-info-w3layouts {
        padding-top: 13em;
    }

    .main-content,
    .layer {
        min-height: 30em;
    }
}


@media screen and (max-width:568px) {
    .ab-content {
        width: 100%;
        float: left;
    }

    .popup {
        width: 80%;
    }
	.border-right-grid{
	 border-left: 8px solid #000000;
}
.border-left-grid{
	  border-right: 8px solid #000000;
}
.order-info {
    padding: 0.8em 0;
}
}

@media screen and (max-width: 480px) {
    .tab-main label {
        padding: 10px 20px;
        font-size: 0.8em;
    }

    form#contactform1 {
        margin-bottom: 2em;
        padding: 0 0 2em 0;
    }
	.contact-title {
    font-size: 24px;
}
.about-text-grid h3, .about-text-grid1 h3 {
    font-size: 1.7em;
}
}

@media screen and (max-width: 414px) {
    .content-left-bottom h4 {
        font-size: 1.3em;
    }
}

@media screen and (max-width: 384px) {

    h3.tittle,
    h3.tittle.two {
        font-size: 1.6em;
    }

    .main-content,
    .layer {
        min-height: 25em;
    }

    .banner-info-w3layouts {
        padding-top: 12em;
    }
.banner-info-w3layouts h3 {
    font-size: 2em;
    letter-spacing: 3px;
}

    .content-left-bottom h4 {
        font-size: 1.2em;
    }

    .test-info {
        padding: 0em 0em 0 0em;
        width: 100%;
    }
	.heading-grid {
    margin-bottom: 0em;
}
}

@media screen and (max-width:375px) {
    .tab-main {
        padding: 16px 0;
        width: 100%;
    }
}
@media screen and (max-width:320px) {
.about-text-grid h3, .about-text-grid1 h3 {
    font-size: 1.5em;
}
}
/*-- //Responsive design --*/
</style>
