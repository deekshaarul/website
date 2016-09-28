<?php
include 'config.php';
$name= $_POST['n'];
$pass= $_POST['p'];
if(($name==$musername)&&($pass==$mpassword))
header('Location:user.php');

?>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--fonts-->
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>	
	   <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>		
	<!--//fonts-->	
	<link rel="shortcut icon" href="l.png">
	<link href="head.css" rel="stylesheet">
	<link href="bdlarge.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<link href="member/style.css" rel="stylesheet" type="text/css" media="all" />  
<style>
body
{
background-image: url('MBG.jpg');
    background-size: cover;

	z-index:-1;
}
</style>
<script>
function check()
{
var name=document.f.n.value;
var pass=document.f.p.value;
var mname = "<?php include 'config.php'; echo $musername ?>";
var mpass = "<?php include 'config.php'; echo $mpassword  ?>";
if((name!=mname)||(pass!=mpass))
alert("Wrong credentials!");
}
</script>
</head>

<body>
<!------------------------------HEADER -------------------------------------->
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgba(0,0,0,0.75);">
  <div class="container-fluid" >
    <!-- logo -->
					<div class="logo">
						<a href="index.html"><img id ="l" src="l1.png" title="Youth Red Cross" />
							<h1>YOUTH RED CROSS</h1></a>
							<p class="det"><br>A student club of VIT, Vellore. It is an official body, of students, that encourages social welfare and selfless service to life.</p>
					</div>
			<!-- /logo 
    <div class="navbar-header">
    </div> -->
    <div class="h">

        <ul class="nav navbar-nav " id="n">
		  <li class="col-xs-1.4"><a href="index.html" ><span class="glyphicon glyphicon-home"><span class="y" > HOME</span></a></li>
          <li class="col-xs-1.4"><a href="bd.php"><span class="glyphicon glyphicon-tint"></span><span class="y"> BLOOD DONATION</a></li>
          <li class="col-xs-1.4"><a href="event.php"><span class="glyphicon glyphicon-calendar"></span><span class="y"> EVENTS</a></li>
          <li class="col-xs-1.4"><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span><span class="y"> GALLERY</a></li>
		  <li class="col-xs-1.4"><a href="about.php"><span class="glyphicon glyphicon-user"></span><span class="y"> ABOUT US</a></li>
		  <li class="col-xs-1.4"><a href="contact.php"><span class="glyphicon glyphicon-phone"></span><span class="y"> CONTACT US</a></li>
        
		  </ul>
		
       <ul style="display:none;" class="nav navbar-nav " id="un">
      <li  class="dropdown"><i class="dropdown-toggle" data-toggle="dropdown" ><span class="fa fa-align-justify"></span></i>
            <ul class="dropdown-menu">
              <li id="s" ><a href="index.html"><span class="glyphicon glyphicon-home"><span class="y" > HOME</span></a></li>
          <li ><a href="bd.php"><span class="glyphicon glyphicon-tint"></span><span class="y"> BLOOD DONATION</a></li>
          <li><a href="event.php"><span class="glyphicon glyphicon-calendar"></span><span class="y"> EVENTS</a></li>
          <li ><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span><span class="y"> GALLERY</a></li>
		  <li ><a href="about.php"><span class="glyphicon glyphicon-user"></span><span class="y"> ABOUT US</a></li>
		  <li ><a href="contact.php"><span class="glyphicon glyphicon-phone"></span><span class="y"> CONTACT US</a></li>
                   <li ><a  href="member.php"><span class="glyphicon glyphicon-nameplate"></span><span class="y" id="sel"> MEMBER</a></div></li>
            </ul>
          </li>
		  </ul> 
      
    </div>
  </div>
</nav> 

<div id="msg" class="container-fluid" style="display:none;">Mobile Version<br> COMING SOON...<img src="c.png" id="im"></div>
<div class="login-form">
						   <div id="log">LOGIN</div>
							<div class="form">
								<form name="f" onsubmit="check()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                <br><br>
									<input name="n" type="text" placeholder="   Username" required="">
									<input name="p" type="password" placeholder="   Password" required="">
									
									<input type="submit" value="Sign In" >
									
								</form>
							</div>
						</div>
			
</body>			
						
