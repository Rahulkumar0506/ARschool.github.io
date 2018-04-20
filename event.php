
<!DOCTYPE html>
<html>
<title>SRM Institute of Science and Technology, Ramapuram</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/custom_css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body,h1,h2,h3,h4,h5,h6 {
	font-family: "fantasy", sans-serif;
}
body, html {
	height: 100%;
	line-height: 1.8;
}
#cname {
	color: #ff8533;
	font-weight: bolder;
}
#emp {
	font-size: 100px;
}
/*.bgimg-1 {
	background-position: center;
	background-size: cover;
	background-image: url("eventimage.jpg");
	min-height: 100%;
	opacity: 0.9;
}*/

.w3-navbar li a {
	padding: 0px;
	float: left;
}
h2{
	font-size:30px;
	font-family:impact;
	text-align:left;
	color:  #ff1a1a;
}
h3{
	text-align:center;
	font-family:Comic Sans MS;
	 font-size:35px;
}

.tagline{
	text-align:left;
	color:#99cc00;
	
}

.tagline2{
	text-align:left;
	color:#99cc00;
}

td {
	padding: 20px;
	font-size: 20px;
}
h3 {

	font-weight: bold;
}
.w3-btn-block {
	background: #000000;
	color: #ffffff;
	font-weight: bold;
	font-size: 20px;
	margin-left:150px;
	
}
#img {
	height:242px;
	width: 100%;
	padding: 10px;
}
.footer{
	background-color: #000000;
	margin-bottom:0px;
	height: 300px;
	
}
.contact {
		float: left;
		width: 40%;
}

.content {
	float: right;
	width: 30%;
}
</style>

<section>
<body>

  <img class="mySlides" src="eventimage.jpg"
  style="width:100%">
  <img class="mySlides" src="eventimage3.jpg"
  style="width:100%">
  <img class="mySlides" src="eventimage4.jpg"
  style="width:100%">
    <img class="mySlides" src="eventimage2.jpg"
  style="width:100%">
  
</section>

<!-- Sidenav on small screens when clicking the menu icon -->
<nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidenav">
	<a href="javascript:void(0)" onclick="w3_close()" class="w3-large"><i class="fa fa-angle-double-left"></i>	</a>
	<a href="events/" onclick="w3_close()"><i class="fa fa-group"></i>&nbsp; Events</a>
  <a href="about/" onclick="w3_close()"><i class="fa fa-group"></i>&nbsp; About Us</a>
	<a href="support/" onclick="w3_close()"><i class="fa fa-handshake-o"></i>&nbsp; Support</a>
</nav>


<!-- Header with full-height image -->

<header class="bgimg-1 w3-display-container w3-animate-opacity w3-text-white" id="home">
   <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top w3-center" id="cname">KRAFT EVENT</h1>
    <hr class="w3-border-grey" style="margin:auto;width:70%">
    <h3 class="w3-xlarge w3-center">Welcome!</h3>
  </div>
</header>

<!-- Content-->
<div class="w3-container w3-padding-32 w3-center" id="events">
  <h3 class="w3-center"><u>Upcoming Events</u></h3><br>
  <table align="center">
    <tr>
      <td>
        <div class="w3-span-16 w3-card-2 w3-center">
        <div class="w3-container">
        <h3>web designing </h3>
        <h3>sunday,25 march 2018</h3>
        <p><a href="https://docs.google.com/forms/d/1eZ8Njh_WpOba3uGw72764Ft_-dqEllv5i4AISsmednU/edit" target="_blank"><button class="w3-btn-block"><i class="fa fa-edit"></i>&nbsp; Register</button></a></p>
        </div>
        </div>
      </td>
    </tr>
  </table><br><br>
</div>
<div class="footer">
<div class="contact"><h2>contact us</h2>
<div class="tagline">web designing project<br>
stark building.room no-4368773<br>
AR Institute OF Science AND Technology<br>
ramapuram,chennai<br>
<em >adarshmonu436@gmail.com</em><br>
<small>&copy; Copyright 2018</small>
</div></div>
	<div class="content">
	<div class="tagline2">
	<h2>mail us:</h2>fax no.-16568626<br>office email:rahulnba98@gmail.com<br>website:www.phpproject.com
	</div></div>
</div>

<script>
// Toggle between showing and hiding the sidenav when clicking the menu icon
var mySidenav = document.getElementById("mySidenav");
function w3_open() {
    if (mySidenav.style.display === 'block')
    {
        mySidenav.style.display = 'none';
    }
    else
    {
        mySidenav.style.display = 'block';
    }
}

// Close the sidenav with the close button
function w3_close()
 {
    mySidenav.style.display = "none";
 }
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>
</body>
</html>
