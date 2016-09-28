<html>
<head>
<title>Blood Donation</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--fonts-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>	
	   <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>		
	<!--//fonts-->	
	<link rel="shortcut icon" href="l.png">
	<link href="head.css" rel="stylesheet">
	<link href="bd/bdlarge.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>		
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
		 <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
		
		<link rel="stylesheet" type="text/css" href="bd/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="bd/cs-skin-elastic.css" />
	
<script>
function r()
{

alert("Thank you! You're a True Hero!");
}
</script>		

<?php
include 'config.php';
if(isset($_POST['submit']))
{

$hostname = "localhost";
//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//select a database to work with
$selected = mysqli_select_db($dbhandle,$dbname)
or die("Could not select vit");
//execute the SQL query and return records
$age = $_POST['age'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$gen = $_POST['radio0'];
$bg = $_POST['bg'];
$slot = $_POST['radio1'];
$db = $_POST['radio'];

if($db=="yes")
{
$wh = $_POST['radioo'];
}
else
$wh=0;

$d=date("Y/m/d");

$insert_query = "insert into bd values ('$name', '$age', '$phone', '$gen', '$bg', '$slot', '$db', '$wh', '$d')";
$executed = mysqli_query($dbhandle,$insert_query);
if (!$executed)
die("unable to insert values");
else
{
echo '<script language="javascript"> r(); </script>';
}
mysqli_close($dbhandle);

}
?>

		
<script>

 var flag=0;
 function c()
 {
 document.getElementById("nnull").style.display="none";
 document.getElementById("nerr").style.display="none";
 document.getElementById("anull").style.display="none";
 document.getElementById("aerr").style.display="none";
 document.getElementById("pnull").style.display="none";
 document.getElementById("perr").style.display="none";
 document.getElementById("gerr").style.display="none";
 document.getElementById("serr").style.display="none";
 document.getElementById("bgerr").style.display="none";
 document.getElementById("dberr").style.display="none";
 document.getElementById("werr").style.display="none";
document.getElementById('na').style.backgroundColor = "transparent";
document.getElementById('name').style.borderColor = "none";
document.getElementById('age').style.borderWidth = "none";
document.getElementById('name').style.borderWidth = "initial";
document.getElementById('phone').style.borderWidth = "initial";
document.getElementById('r').style.backgroundColor = "transparent";
document.getElementById('age').style.borderColor = "initial";
document.getElementById('p').style.backgroundColor = "transparent";
document.getElementById('phone').style.borderColor = "initial";
document.getElementById('g').style.backgroundColor = "transparent";
document.getElementById('bg').style.backgroundColor = "transparent";
document.getElementById('f').style.backgroundColor = "transparent";
document.getElementById('w').style.backgroundColor = "transparent";
document.getElementById('d').style.backgroundColor = "transparent";
 
 }
        function name()
        { 
            var name=document.f.name.value;
			var letters;
            if(name == "")
{

document.getElementById('na').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById('name').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('name').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("nnull").style.display="";
flag=1;
}
else
{
letters=/^[A-Za-z]+$/;
if(!name.match(letters))
{
document.getElementById('na').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById('name').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('name').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("nerr").style.display="";
flag=1;
}
}
        }   
        function age()
        {
            var age=document.f.age.value;
			var ages;
			if(age == "")
{
document.getElementById('r').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById('age').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('age').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("anull").style.display="";
flag=1;
}
else
{
ages=/^[1-5][0-9]$/;

if(!age.match(ages))
{
document.getElementById('r').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById('age').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('age').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("aerr").style.display="";
flag=1;
}
else 
if (age<18)

{
document.getElementById('r').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById('age').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('age').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("aaerr").style.display="";
flag=1;
}



}
        }
		
function ph()
{var phone=document.f.phone.value; var numbers;
		
		if(phone == "")
{
document.getElementById('p').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById('phone').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('phone').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("pnull").style.display="";
flag=1;
}
else
{
numbers=/^[0-9]{10}$/;
if(!phone.match(numbers))
{
document.getElementById('p').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById('phone').style.borderColor = "rgba(255, 255, 0,0.5)";
document.getElementById('phone').style.borderWidth = "2px";
document.getElementById("err").style.display="";
document.getElementById("perr").style.display="";
flag=1;
}
}
}

function g()
{
var gen=document.f.radio0;
var check=0;
for (i=0;i<gen.length;i++)
{
if (gen[i].checked)
{
check = 1;
}
}
if(!check)
{
document.getElementById('g').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById("err").style.display="";
document.getElementById("gerr").style.display="";
flag=1;
}
}

function b()
{
var bg=document.f.bg;
if(bg.selectedIndex == 0)
{
document.getElementById('bg').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById("err").style.display="";
document.getElementById("bgerr").style.display="";
flag=1;
}
}

function s()
{
var slot=document.f.radio1;
var chec=0;
for (i=0;i<slot.length;i++)
{
if (slot[i].checked)
{
chec = 1;
}
}
if(!chec)
{
document.getElementById('f').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById("err").style.display="";
document.getElementById("serr").style.display="";
flag=1;
}
}

function checkdur()
{
var dura=document.f.radioo;
var chec=0;
for (i=0;i<dura.length;i++)
{
if (dura[i].checked)
{
chec = 1;
}
}
if(!chec)
{
document.getElementById('w').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById("err").style.display="";
document.getElementById("werr").style.display="";
flag=1;
}
}

function d()
{
var db=document.f.radio;
var che=0;
var val;
for (i=0;i<db.length;i++)
{
if (db[i].checked)
{
che = 1;
val=db[i].value;
}
}
if(!che)
{
document.getElementById('d').style.backgroundColor = "rgba(255, 255, 0,0.5)";
document.getElementById("err").style.display="";
document.getElementById("dberr").style.display="";
flag=1;
}
else
if(val=="yes")
{

checkdur();
}

}

        function validate()
        {
            //flag=0;
          
			c();
               
            name();
           
            age();
			ph();
			g();
			b();
			s();
			d();
              
			
            if(flag==1)
                return false;
            else
                {return true;}
        }
		
		function ifyes()
		{
		 document.getElementById("dur").style.display="";
		 
		}
		
		function ifno()
		{
		 document.getElementById("dur").style.display="none";
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
			<!-- /logo -->
    
    <div class="h">

        <ul class="nav navbar-nav " >
		  <li class="col-xs-1.4"><a href="index.html"><span class="glyphicon glyphicon-home"></span><span class="y"> HOME</a></li>
          <li class="col-xs-1.4"><a href="#"><span class="glyphicon glyphicon-tint"></span><span class="y"> BLOOD DONATION</a></li>
          <li class="col-xs-1.4"><a href="event.php"><span class="glyphicon glyphicon-calendar"></span><span class="y"> EVENTS</a></li>
          <li class="col-xs-1.4"><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span><span class="y"> GALLERY</a></li>
		  <li class="col-xs-1.4"><a href="about.php"><span class="glyphicon glyphicon-user"></span><span class="y"> ABOUT US</a></li>
		  <li class="col-xs-1.4"><a href="contact.php"><span class="glyphicon glyphicon-phone"></span><span class="y"> CONTACT US</a></li>
        <!--  
		   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41"></a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
		-->
		  </ul>
		 <ul class="nav navbar-nav navbar-right" class="row">
            <li class="col-xs-1.4"><div class="learn-button"><a class="login" href="member.php">Member</a></div></li>
      </ul>
        
      
    </div>
  </div>
</nav>   

 
		<div class="donate-main" id="sec" class="container-fluid">
			<div class="col-md-8 donate-right">
				<div class="donate-top">
					<h3>Willing Donors</h3>
					<form name="f" action="bd.php" method="post" onsubmit="return(validate())">
						
						<div>
							<span id="na" >Name</span>
								<input name="name" type="text" id="name" class="name" placeholder="Enter your name" > 
							 </div>
							 
							 <div class="clearfix"> </div>
							<div>
								 <span id="r">Age</span>
								 <input id="age" type="text" name="age" placeholder="Enter a valid age"> 
							 </div>
							 <div class="clearfix"> </div>
								 					 		
							 <div>
							<span id="p">Phone No</span>
								<input id="phone" type="text" name="phone" placeholder="Enter a 10 digit Phone No"> 
							 </div>
							 	 <div class="clearfix"> </div>
						     <div class="db">
								 <span id="g">Gender </span>
									
									<div>
                                     <input type="radio" name="radio0" id="male" class="radio" value="male"/>
                                        <label for="male">Male</label>
                                     </div>
									
                                    <div id="ma">
                                      <input type="radio" name="radio0" id="fem" class="radio" value="female"/>
                                       <label for="fem">Female</label>
                                     </div>
									
									 
                                    </div>
								
							 <div class="clearfix"> </div>
							<div>
									<span id="bg" >Blood Group</span>
						 		<select class="cs-select cs-skin-elastic" name="bg">
					<option value="" disabled selected>Select a Blood Group</option>
					<option value="a+" >A+</option>
					<option value="a-" >A-</option>
					<option value="b+">B+</option>
					<option value="b-">B-</option>
					<option value="ab+">AB+</option>
					<option value="ab-">AB-</option>
					<option value="o+">O+</option>
					<option value="o-">O-</option>
				</select>
								</div>
								
								<div class="clearfix"> </div>
								
								<div class="db">
								 <span id="f">Free Slot </span>
									<div>
                                     <input type="radio" name="radio1" id="mor" class="radio" value="morning"/>
                                        <label for="mor">Morning Slot</label>
                                     </div>

                                    <div id="e">
                                      <input type="radio" name="radio1" id="eve" class="radio" value="evening" />
                                       <label for="eve">Evening Slot</label>
                                     </div>
                                    </div>
								
							 <div class="clearfix"> </div>
					   			<div class="db">
								 <span id="d">Donated before?</span>
									<div>
									
                                     <input type="radio" name="radio" id="y" class="radio" value="yes" onclick="ifyes()"/>
                                        <label for="y">Yes</label>
                                     </div>

                                    <div id="nn">
                                      <input type="radio" name="radio" id="no" class="radio" value="no" onclick="ifno()"/>
                                       <label for="no">No</label>
									   
                                     </div>
									 
                                    </div>
									
							<div class="clearfix"> </div>
					   			<div class="db" id="dur" style="display:none;">
								 <span id="w">When?</span>
									<div>
									
                                     <input type="radio" name="radioo" id="tm" class="radio" value="1"/>
                                        <label for="tm">This Month</label>
                                     </div>

                                    <div id="l1">
                                      <input type="radio" name="radioo" id="lm" class="radio" value="2"/>
                                       <label for="lm">Last Month</label>
									   
                                     </div>
									 
									 <div id="l2">
                                      <input type="radio" name="radioo" id="mb" class="radio" value="3"/>
                                       <label for="mb">> 3 Months </label>
									   
                                     </div>
									 
                                    </div>		
									
								<div class="clearfix"> </div>
								<div id="err" style=" color:#9f0000;display:none;">
								<ul>
								    <li id="nnull" style="display:none;">Name isn't filled</li>
									<li id="nerr" style="display:none;">Not a valid name</li>
									<li id="anull" style="display:none;">Age isn't filled</li>
									<li id="aerr" style="display:none;">Not a valid age</li>
									<li id="aaerr" style="display:none;">Age should be above 17</li>
									<li id="pnull" style="display:none;">Phone No isn't filled</li>
									<li id="perr" style="display:none;">Not a valid Phone No</li>
									<li id="gerr" style="display:none;">Choose any one gender</li>
									
									<li id="bgerr" style="display:none;">Choose any one Blood Group</li>
									<li id="serr" style="display:none;">Choose any one slot</li>
									<li id="dberr" style="display:none;">Choose whether yes/no</li>
									<li id="werr" style="display:none;">Choose any one time</li>
									
								</ul>
								</div>
						<input type="submit" value="Submit" name="submit" >
					
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
<script src="bd/classie.js"></script>
		<script src="bd/selectFx.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>

</body>
</html>
