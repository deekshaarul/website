<html>
<head>
<title>Contact Us</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--fonts-->
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>	
	   <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>		
	<!--//fonts-->	
	<link href="contact/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="contact/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="l.png">
	<link href="head.css" rel="stylesheet">
	<link href="bdlarge.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>		
<script>
function change()
{

    document.getElementById("t").style.backgroundColor="white";
	document.getElementById("t1").style.backgroundColor="white";
	document.getElementById("t2").style.backgroundColor="white";
	document.getElementById("t3").style.backgroundColor="white";
}
</script>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$m=$_POST['msg'];
$message="Name: ".$name."<br>"."Phone No: ".$phone."<br>"."Email: ".$email."<br>"."Message: ".$m;

$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$retval = mail('admin@yrcvit.com', 'Someone Contacted You', $message,$headers);

         
         if( $retval == true )
         {
            echo '<script language="javascript"> alert("Message sent successfully..."); </script>';
         }
         else
         {
            echo '<script language="javascript"> alert("Message not sent !!"); </script>';
         }
}

?>
		
<script>

 var flag=0;
 function c()
 {
 document.getElementById("nnull").style.display="none";
 document.getElementById("nerr").style.display="none";
 document.getElementById("pnull").style.display="none";
 document.getElementById("perr").style.display="none";
  document.getElementById("enull").style.display="none";
 document.getElementById("eerr").style.display="none";
 document.getElementById("mnull").style.display="none";
 
 }
        function name()
        {
            var name=document.f.name.value;
			var letters;
            if(name == "")
{

document.getElementById('t').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('t').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("nnull").style.display="";
flag=1;
}
else
{
letters=/^[A-Za-z]*+$/;
if(!name.match(letters))
{

document.getElementById('t').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('t').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("nerr").style.display="";
flag=1;
}
}
}   
        function e()
        {
            var e=document.f.email.value;
			var ee;
			if(e == "")
{

document.getElementById('t2').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('t2').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("enull").style.display="";
flag=1;
}
else
{
ee= /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

if(!e.match(ee))
{

document.getElementById('t2').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('t2').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("eerr").style.display="";
flag=1;

}
}
}
		
function ph()
{var phone=document.f.phone.value; var numbers;
		
		if(phone == "")
{

document.getElementById('t1').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('t1').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("pnull").style.display="";
flag=1;
}
else
{
numbers=/^[0-9]{10}$/;
if(!phone.match(numbers))
{

document.getElementById('t1').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('t1').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("perr").style.display="";
flag=1;
}
}
}

function m()
{var m=document.f.msg.value; 
		
		if(m == "")
{

document.getElementById('t3').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('t3').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("mnull").style.display="";
flag=1;
}
}
        function validate()
        {
            flag=0;
			c();
            name();
            ph();
			e();
			m();
			
			
            if(flag==1)
                return false;
            else
                {return true;}
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

        <ul class="nav navbar-nav " id="n" >
		  <li class="col-xs-1.4"><a href="index.html" ><span class="glyphicon glyphicon-home"><span class="y" > HOME</span></a></li>
          <li class="col-xs-1.4"><a href="bd.php"><span class="glyphicon glyphicon-tint"></span><span class="y"> BLOOD DONATION</a></li>
          <li class="col-xs-1.4"><a href="event.php"><span class="glyphicon glyphicon-calendar"></span><span class="y"> EVENTS</a></li>
          <li class="col-xs-1.4"><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span><span class="y"> GALLERY</a></li>
		  <li class="col-xs-1.4"><a href="about.php"><span class="glyphicon glyphicon-user"></span><span class="y"> ABOUT US</a></li>
		  <li class="col-xs-1.4"><a href="#"><span class="glyphicon glyphicon-phone"></span><span class="y" id="sel"> CONTACT US</a></li>
        <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41"></a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>-->
		  </ul>
		 <ul class="nav navbar-nav navbar-right" class="row" id="row">
     <!--    <li><a href="#"><span class="glyphicon glyphicon-phone"></span> Message Us</a></li> -->
        <li class="col-xs-1.4"><div class="learn-button"><a class="login" href="member.php">Member</a></div></li>
      </ul>
       
      <ul style="display:none;" class="nav navbar-nav " id="un">
      <li  class="dropdown"><i class="dropdown-toggle" data-toggle="dropdown" ><span class="fa fa-align-justify"></span></i>
            <ul class="dropdown-menu">
              <li id="s" ><a href="index.html"><span class="glyphicon glyphicon-home"><span class="y" > HOME</span></a></li>
          <li ><a href="bd.php"><span class="glyphicon glyphicon-tint"></span><span class="y"> BLOOD DONATION</a></li>
          <li><a href="event.php"><span class="glyphicon glyphicon-calendar"></span><span class="y"> EVENTS</a></li>
          <li ><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span><span class="y"> GALLERY</a></li>
		  <li ><a href="about.php"><span class="glyphicon glyphicon-user"></span><span class="y"> ABOUT US</a></li>
		  <li ><a href="contact.php"><span class="glyphicon glyphicon-phone"></span><span class="y" id="sel"> CONTACT US</a></li>
                   <li ><a  href="member.php"><span class="glyphicon glyphicon-nameplate"></span><span class="y"> MEMBER</a></div></li>
            </ul>
          </li>
		  </ul> 
      
    </div>
  </div>
</nav> 
<div id="msg" class="container-fluid" style="display:none;">Mobile Version<br> COMING SOON...<img src="c.png" id="im"></div>
<div class="contact" style="margin-top:100px;">
	 <div class="container">
		 <div class="contact-grids">
			 <h2 style="margin-left:0px;">LEAVE A MESSAGE</h2>
			  <form  name="f" action="contact.php" method="post" onSubmit="return validate()">
				<input type="text" placeholder="Name" name="name" id="t" oninput="change()" required=" ">
				<input type="text" placeholder="Phone No" name="phone" id="t1" oninput="change()" required=" ">
				<input type="text" placeholder="Email" name="email" id="t2" oninput="change()" required=" ">
				<textarea placeholder="Message..." name="msg" id="t3" oninput="change()" required=" "></textarea>
				
                           <div id="err" style=" color:#9f0000;display:none;">
                           <ul>
								    <li id="nnull" style="display:none;">Name isn't filled</li>
									<li id="nerr" style="display:none;">Not a valid name</li>
								
									<li id="pnull" style="display:none;">Phone No isn't filled</li>
									<li id="perr" style="display:none;">Not a valid Phone No</li>
                                                                        <li id="enull" style="display:none;">Email isn't filled</li>
									<li id="eerr" style="display:none;">Not a valid Email</li>
									<li id="mnull" style="display:none;">Empty Message</li>
									
									
								</ul>
                           </div>

                           <input type="submit" name="submit" value="SEND">
			 </form>
			 <div class="contact-icons">
				<div class="contact-grid">
					<div class="contact-fig">
						<span> </span>
					</div>
					<p>+91 98 84 086772</p>
                                        <p>+91 98 65 296412</p>
				</div>
				<div class="contact-grid">
					<div class="contact-fig1">
						<span> </span>
					</div>
					<p>VIT University
						<span>Vellore</span></p>
				</div>
				<div class="contact-grid">
					<div class="contact-fig2">
						<span> </span>
					</div>
					<p><a href="mailto:yrcvit2014@gmail.com">yrcvit2014@gmail.com</a></p>
				</div>
				<div class="clearfix"> </div>
			 </div>
			
		 </div>
	 </div>
</div>
<!-- contact -->