<html>
<head>
<title>Gallery</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--fonts-->
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>	
	   <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>		
	<!--//fonts-->	
	<link rel="shortcut icon" href="l.png">
	<link href="head.css" rel="stylesheet">
	
	<link href="gallery/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="gallery/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/bbootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>		
  <script type="text/javascript" src="gallery/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="gallery/js/cufon-yui.js" type="text/javascript"></script>
		<script src="gallery/js/GreyscaleBasic.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('.fp_close');
		</script>
		
		<link type="text/css" href="gallery/css/jquery.ui.theme.css" rel="stylesheet" />
		<link type="text/css" href="gallery/css/jquery.ui.core.css" rel="stylesheet" />
        <link type="text/css" href="gallery/css/jquery.ui.slider.css" rel="stylesheet" />
		<link rel="stylesheet" href="gallery/css/style.css" type="text/css" media="screen"/>

</head>

<body>
<!------------------------------HEADER -------------------------------------->
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgba(0,0,0,0.75);">
  <div class="container-fluid" >
    <!-- logo -->
					<div class="logo">
						<a href="index.html"><img id ="l" src="l1.png" title="Youth Red Cross">
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
          <li class="col-xs-1.4"><a href="#"><span class="glyphicon glyphicon-picture"></span><span class="y" id="sel"> GALLERY</a></li>
		  <li class="col-xs-1.4"><a href="about.php"><span class="glyphicon glyphicon-user"></span><span class="y"> ABOUT US</a></li>
		  <li class="col-xs-1.4"><a href="contact.php"><span class="glyphicon glyphicon-phone"></span><span class="y"> CONTACT US</a></li>
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
          <li ><a href="#"><span class="glyphicon glyphicon-picture"></span><span class="y" id="sel"> GALLERY</a></li>
		  <li ><a href="about.php"><span class="glyphicon glyphicon-user"></span><span class="y"> ABOUT US</a></li>
		  <li ><a href="contact.php"><span class="glyphicon glyphicon-phone"></span><span class="y"> CONTACT US</a></li>
                   <li ><a  href="member.php"><span class="glyphicon glyphicon-nameplate"></span><span class="y"> MEMBER</a></div></li>
            </ul>
          </li>
		  </ul>
    </div>
  </div>
</nav>
<div id="msg" class="container-fluid" style="display:none;">Mobile Version<br> COMING SOON...<img src="c.png" id="im"></div> 
<div id="fp_gallery" class="fp_gallery">
			<div id="mi-slider" class="mi-slider">
           <nav>
			<ul id="fp_galleryList" class="fp_galleryList">
				<li>Blood Donation</li>
				<li>R.O.A.R</li>
				<li>Oldage Home Visits</li>
				<li>Orphanage Visit</li>
				<li>Street Plays</li>
				<li>Eye Check-up Camp</li>
				<li>Study Camp</li>
			</ul>
			</nav>
			</div>
			<div id="fp_thumbContainer">
				<div id="fp_thumbScroller">
					<div class="container">
					<!--------                             ONE                     ------------------------------------>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/1.jpg" alt="gallery/images/bd/1.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/2.jpg" alt="gallery/images/bd/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/3.jpg" alt="gallery/images/bd/3.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/4.jpg" alt="gallery/images/bd/4.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/5.jpg" alt="gallery/images/bd/5.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/6.jpg" alt="gallery/images/bd/6.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/7.jpg" alt="gallery/images/bd/7.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/8.jpg" alt="gallery/images/bd/8.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/9.jpg" alt="gallery/images/bd/9.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/12.jpg" alt="gallery/images/bd/we.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/11.jpg" alt="gallery/images/bd/11.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/12.jpg" alt="gallery/images/bd/12.jpg" class="thumb" /></a></div>
						</div>
<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/11.jpg" alt="gallery/images/bd/11.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/bd/thumbs/12.jpg" alt="gallery/images/bd/3.jpg" class="thumb" /></a></div>
						</div>

					</div>
					
					<!--------                             TWO                     ------------------------------------>
					
					<div class="container">
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/1.jpg" alt="gallery/images/album2/1.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/2.jpg" alt="gallery/images/album2/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/3.jpg" alt="gallery/images/album2/3.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/4.jpg" alt="gallery/images/album2/4.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/5.jpg" alt="gallery/images/album2/5.jpg" class="thumb" /></a></div>
						</div>
					<!--	<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/6.jpg" alt="gallery/images/album2/6.jpg" class="thumb" /></a></div>
						</div>	-->					
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/7.jpg" alt="gallery/images/album2/7.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/8.jpg" alt="gallery/images/album2/8.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/9.jpg" alt="gallery/images/album2/9.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/10.jpg" alt="gallery/images/album2/10.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/11.jpg" alt="gallery/images/album2/11.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/12.jpg" alt="gallery/images/album2/12.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/13.jpg" alt="gallery/images/album2/13.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/2.jpg" alt="gallery/images/album2/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/2.jpg" alt="gallery/images/album2/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album2/thumbs/3.jpg" alt="gallery/images/album2/3.jpg" class="thumb" /></a></div>
						</div>

					</div>
					
					<!--------                             THREE                     ------------------------------------>
					<div class="container">
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/1.jpg" alt="gallery/images/album3/1.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/2.jpg" alt="gallery/images/album3/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/3.jpg" alt="gallery/images/album3/3.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/4.jpg" alt="gallery/images/album3/4.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/5.jpg" alt="gallery/images/album3/5.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/6.jpg" alt="gallery/images/album3/6.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/7.jpg" alt="gallery/images/album3/7.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/8.jpg" alt="gallery/images/album3/8.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/9.jpg" alt="gallery/images/album3/9.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/10.jpg" alt="gallery/images/album3/10.jpg" class="thumb" /></a></div>
						</div>
<!----
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/11.jpg" alt="gallery/images/album3/11.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/12.jpg" alt="gallery/images/album3/12.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/13.jpg" alt="gallery/images/album3/13.jpg" class="thumb" /></a></div>
						</div>
---->
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/2.jpg" alt="gallery/images/album3/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/2.jpg" alt="gallery/images/album3/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album3/thumbs/3.jpg" alt="gallery/images/album3/3.jpg" class="thumb" /></a></div>
						</div>

					</div>
					<!------------------------------                     FOUR                     ------------------------------------>
					<div class="container">
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/1.jpg" alt="gallery/images/album4/1.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/2.jpg" alt="gallery/images/album4/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/3.jpg" alt="gallery/images/album4/3.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/4.jpg" alt="gallery/images/album4/4.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/5.jpg" alt="gallery/images/album4/5.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/6.jpg" alt="gallery/images/album4/6.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/7.jpg" alt="gallery/images/album4/7.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/8.jpg" alt="gallery/images/album4/8.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/9.jpg" alt="gallery/images/album4/9.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/10.jpg" alt="gallery/images/album4/10.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/11.jpg" alt="gallery/images/album4/11.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/12.jpg" alt="gallery/images/album4/12.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/13.jpg" alt="gallery/images/album4/13.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/2.jpg" alt="gallery/images/album4/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/2.jpg" alt="gallery/images/album4/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album4/thumbs/3.jpg" alt="gallery/images/album4/3.jpg" class="thumb" /></a></div>
						</div>

					</div>
					<!------------------------------                     FIVE                     ------------------------------------>
					
					<div class="container">
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/1.jpg" alt="gallery/images/album5/1.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/2.jpg" alt="gallery/images/album5/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/3.jpg" alt="gallery/images/album5/3.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/4.jpg" alt="gallery/images/album5/4.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/5.jpg" alt="gallery/images/album5/5.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/6.jpg" alt="gallery/images/album5/6.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/7.jpg" alt="gallery/images/album5/7.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/8.jpg" alt="gallery/images/album5/8.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/9.jpg" alt="gallery/images/album5/9.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/10.jpg" alt="gallery/images/album5/10.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/11.jpg" alt="gallery/images/album5/11.jpg" class="thumb" /></a></div>
						</div>
<!--
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/12.jpg" alt="gallery/images/album5/12.jpg" class="thumb" /></a></div>
						</div>
-->
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/13.jpg" alt="gallery/images/album5/13.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/2.jpg" alt="gallery/images/album5/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/2.jpg" alt="gallery/images/album5/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album5/thumbs/3.jpg" alt="gallery/images/album5/3.jpg" class="thumb" /></a></div>
						</div>

					</div>
					
					<!------------------------------                     SIX                     ------------------------------------>
					
					<div class="container">
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/1.jpg" alt="gallery/images/album6/1.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/2.jpg" alt="gallery/images/album6/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/3.jpg" alt="gallery/images/album6/3.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/4.jpg" alt="gallery/images/album6/4.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/5.jpg" alt="gallery/images/album6/5.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/6.jpg" alt="gallery/images/album6/6.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/7.jpg" alt="gallery/images/album6/7.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/8.jpg" alt="gallery/images/album6/8.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/9.jpg" alt="gallery/images/album6/9.jpg" class="thumb" /></a></div>
						</div>	
<!-----------------------------					
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/10.jpg" alt="gallery/images/album6/10.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/11.jpg" alt="gallery/images/album6/11.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/12.jpg" alt="gallery/images/album6/12.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/13.jpg" alt="gallery/images/album6/13.jpg" class="thumb" /></a></div>
						</div>
--------------------------->
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/2.jpg" alt="gallery/images/album6/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/2.jpg" alt="gallery/images/album6/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album6/thumbs/3.jpg" alt="gallery/images/album6/3.jpg" class="thumb" /></a></div>
						</div>

					</div>
					
					<!------------------------------                     SEVEN                     ------------------------------------>
					
					<div class="container">
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/1.jpg" alt="gallery/images/album7/1.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/2.jpg" alt="gallery/images/album7/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/3.jpg" alt="gallery/images/album7/3.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/4.jpg" alt="gallery/images/album7/4.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/5.jpg" alt="gallery/images/album7/5.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/6.jpg" alt="gallery/images/album7/6.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/7.jpg" alt="gallery/images/album7/7.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/8.jpg" alt="gallery/images/album7/8.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/9.jpg" alt="gallery/images/album7/9.jpg" class="thumb" /></a></div>
						</div>						
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/10.jpg" alt="gallery/images/album7/10.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/11.jpg" alt="gallery/images/album7/11.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/12.jpg" alt="gallery/images/album7/12.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/13.jpg" alt="gallery/images/album7/13.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/2.jpg" alt="gallery/images/album7/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/2.jpg" alt="gallery/images/album7/2.jpg" class="thumb" /></a></div>
						</div>
						<div class="content">
							<div><a href="#"><img src="gallery/images/album7/thumbs/3.jpg" alt="gallery/images/album7/3.jpg" class="thumb" /></a></div>
						</div>

					</div>
					
				</div>
			</div>

			<div id="fp_scrollWrapper" class="fp_scrollWrapper">
				<span id="fp_prev_thumb" class="fp_prev_thumb"></span>
				<div id="slider" class="slider"></div>
				<span id="fp_next_thumb" class="fp_next_thumb"></span>
			</div>

			<div id="fp_overlay" class="fp_overlay"></div>
			<div id="fp_loading" class="fp_loading"></div>
			<div id="fp_next" class="fp_next"></div>
			<div id="fp_prev" class="fp_prev"></div>
			<div id="fp_close" class="fp_close"></div>
		</div>
        
		</div>
		<!--  JAVASCRIPT -->
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript">
			$(function() {
				//caching
				//the main wrapper of the gallery
				var $fp_gallery			= $('#fp_gallery')
				//the overlay when the large image is displayed
				var $fp_overlay			= $('#fp_overlay');
				//image loading status
				var $fp_loading			= $('#fp_loading');
				//the next and previous buttons
				var $fp_next			= $('#fp_next');
				var $fp_prev			= $('#fp_prev');
				//the close button
				var $fp_close			= $('#fp_close');
				//the main container for the thumbs structure
				var $fp_thumbContainer 	= $('#fp_thumbContainer');
				//wrapper of jquery ui slider
				var $fp_scrollWrapper	= $('#fp_scrollWrapper');
				//total number of images
				var nmb_images=0;
				//which gallery is clicked (index)
				var gallery_idx=-1;
				//scroller wrapper
				var $fp_thumbScroller	= $('#fp_thumbScroller');
				//jquery ui slider
				var $slider				= $('#slider');
				//the links of the galleries (the cities)
				var $fp_galleries		= $('#fp_galleryList > li');
				//current image being viewed
				var current				= 0;
				
				//some control flags:
				//prevent fast clicks on next and previous
				var photo_nav			= true;
				
				//User clicks on a city / gallery;
				$fp_galleries.bind('click',function(){
					$fp_galleries.removeClass('current');
					var $gallery 		= $(this);
					$gallery.addClass('current');
					var gallery_index 	= $gallery.index();
					if(gallery_idx == gallery_index) return;
					gallery_idx			= gallery_index;
					//close the gallery and slider if opened
					if($fp_thumbContainer.data('opened')==true){
						$fp_scrollWrapper.fadeOut();
						$fp_thumbContainer.stop()
										  .animate({'height':'0px'},200,function(){
											openGallery($gallery);
										  });
					}				  
					else
						openGallery($gallery);
				});
					
				//opens a gallery after cliking on a city / gallery
				function openGallery($gallery){
					//current gets reseted
					current				= 0;				  
					//wrapper of each content div, where each image is
					var $fp_content_wrapper = $fp_thumbContainer.find('.container:nth-child('+parseInt(gallery_idx+1)+')');
					//hide all the other galleries thumbs wrappers
					$fp_thumbContainer.find('.container').not($fp_content_wrapper).hide();
					//and show this one
					$fp_content_wrapper.show();
					//total number of images
					nmb_images			= $fp_content_wrapper.children('div').length;
					//calculate width,
					//padding left 
					//and padding right for content wrapper
					var w_width 	= 0;
					var padding_l	= 0;
					var padding_r	= 0;
					//center of screen
					var center		= $(window).width()/2;
					var one_divs_w  = 0;
					/*
					Note:
					the padding left is the center minus half of the width of the first content div
					the padding right is the center minus half of the width of the last content div
					*/
					$fp_content_wrapper.children('div').each(function(i){
						var $div 		= $(this);
						var div_width	= $div.width(); 
						w_width			+=div_width;
						//if first one, lets calculate the padding left
						if(i==0)
							padding_l = center - (div_width/2);
						//if last one, lets calculate the padding right
						if(i==(nmb_images-1)){
							padding_r = center - (div_width/2);
							one_divs_w= div_width;
						}	
					}).end().css({
						'width'				: w_width + 'px',
						'padding-left' 		: padding_l + 'px',
						'padding-right' 	: padding_r + 'px'
					});
					
					//scroll all left;
					$fp_thumbScroller.scrollLeft(w_width);
					
					//innitialize the slider
					$slider.slider('destroy').slider({
						orientation	: 'horizontal',
						max			: w_width -one_divs_w,//total width minus one content div width
						min			: 0,
						value		: 0,
						slide		: function(event, ui) {
							$fp_thumbScroller.scrollLeft(ui.value);
						},
						stop: function(event, ui) {
							//when we stop sliding 
							//we may want that the closest picture to the center 
							//of the window stays centered. Uncomment the following line
							//if you want that behaviour
							checkClosest();
						}
					});
					//open the gallery and show the slider
					$fp_thumbContainer.animate({'height':'240px'},200,function(){
						$(this).data('opened',true);
						$fp_scrollWrapper.fadeIn();
					});
					
					//scroll all right;
					$fp_thumbScroller.stop()
									 .animate({'scrollLeft':'0px'},2000,'easeInOutExpo');

					//User clicks on a content div (image)
					$fp_content_wrapper.find('.content')
									 .bind('click',function(e){
						var $current 	= $(this);
						//track the current one
						current			= $current.index();
						//center and show this image
						//the second parameter set to true means we want to 
						//display the picture after the image is centered on the screen
						centerImage($current,true,600);
						e.preventDefault();
					});					
				}
				
				//while the gallery scrolls we want that the slider scrolls as well
				$fp_thumbScroller.scroll(function(){
					$slider.slider('value',parseInt($fp_thumbScroller.scrollLeft(),10));
				});
				
				//User clicks next button (preview mode)
				$fp_next.bind('click',function(){
					if(photo_nav){
						photo_nav = false;
					navigate(1);
					}	
				});
				
				//User clicks previous button (preview mode)
				$fp_prev.bind('click',function(){
					if(photo_nav){
						photo_nav = false;
					navigate(0);
					}	
				});
				
				//User clicks next button (thumbs)
				$('#fp_next_thumb').click(function(){
					slideThumb(1);
				});
				
				//User clicks previous button (thumbs)
				$('#fp_prev_thumb').click(function(){
					slideThumb(0);
				});
				
				//User clicks close button
				$fp_close.bind('click',function(){
					if(!photo_nav) return;
					//windows scroll if any
					var windowS 		= $(window).scrollTop();
					//the large image being viewed
					var $large_img		= $('#fp_preview');
					//the current thumb
					var $current 		= $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')')
														   .find('.content:nth-child('+parseInt(current+1)+')');
					//offset values of current thumb
					var current_offset	= $current.offset();
					//the large image will animate in the direction of the center
					//after that it is removed from the DOM
					$large_img.stop().animate({
						'top'			: current_offset.top + windowS + 'px',
						'left'			: $(window).width()/2 - $current.width()/2 + 'px',
						'width'			: $current.width() + 'px',
						'height'		: $current.height() + 'px',
						'opacity'		: 0
					},800,function(){
						$(this).remove();
					//hide the overlay, and the next, previous and close buttons
					hidePreviewFunctions();
				});
				
					
				});
				
				//centers an image and opens it if open is true
				function centerImage($obj,open,speed){
					//the offset left of the element
					var obj_left 			= $obj.offset().left;
					//the center of the element is its offset left plus 
					//half of its width
					var obj_center 			= obj_left + ($obj.width()/2);
					//the center of the window
					var center				= $(window).width()/2;
					//how much the scroller has scrolled already
					var currentScrollLeft 	= parseFloat($fp_thumbScroller.scrollLeft(),10);
					//so we know that in order to center the image,
					//we must scroll the center of the image minus the center of the screen,
					//and add whatever we have scrolled already
					var move 				= currentScrollLeft + (obj_center - center);
					if(move != $fp_thumbScroller.scrollLeft()) //try 'easeInOutExpo'
						$fp_thumbScroller.stop()
										 .animate({scrollLeft: move}, speed,function(){
							if(open)
								enlarge($obj);
						});
					else if(open)
						enlarge($obj);
				}
				
				//shows the large image
				//first we position the large image on top of the thumb
				//and then, we animate it to the maximum we can get 
				//based on the windows size
				function enlarge($obj){
					//the image element
					var $thumb = $obj.find('img');
					//show loading image
					$fp_loading.show();
					//preload large image
					$('<img id="fp_preview" />').load(function(){
						var $large_img 	= $(this);
						
						//confirm there's no other large one
						$('#fp_preview').remove();
						
						$large_img.addClass('fp_preview');
						//now let's position this image on the top of the thumb
						//we append this image to the fp_gallery div
						var obj_offset 	= $obj.offset();
						$large_img.css({
							'width'	: $thumb.width() + 'px',
							'height': $thumb.height() + 'px',
							'top'	: obj_offset.top + 'px',
							'left'	: obj_offset.left + 5 + 'px'//5 of margin
						}).appendTo($fp_gallery);
						//getFinalValues gives us the maximum possible width and height
						//for the large image based on the windows size.
						//those values are saved on the element using the jQuery.data()
						getFinalValues($large_img);
						var largeW 	= $large_img.data('width');
						var largeH 	= $large_img.data('height');
						//windows width, height and scroll
						var $window = $(window);
						var windowW = $window.width();
						var windowH = $window.height();
						var windowS = $window.scrollTop();
						//hide the image loading
						$fp_loading.hide();
						//show the overlay
						$fp_overlay.show();
						//now animate the large image
						$large_img.stop().animate({
							'top'		: windowH/2 -largeH/2 + windowS + 'px',
							'left'		: windowW/2 -largeW/2 + 'px',
							'width'		: largeW + 'px',
							'height'	: largeH + 'px',
							'opacity'	: 1
						},800,function(){
							//after the animation, 
							//show the next, previous and close buttons
							showPreviewFunctions();
						});
					}).attr('src',$thumb.attr('alt'));
				}
				
				//shows next or previous image
				//1 is right;0 is left
				function navigate(way){
					//show loading image
					$fp_loading.show();
					if(way==1){
						++current;
						var $current = $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')')
														.find('.content:nth-child('+parseInt(current+1)+')');
						if($current.length == 0){
							--current;
							$fp_loading.hide();
							photo_nav = true;
							return;
						}
					}
					else{
						--current;
						var $current = $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')')
														.find('.content:nth-child('+parseInt(current+1)+')');
						if($current.length == 0){
							++current;
							$fp_loading.hide();
							photo_nav = true;
							return;
						}
					}
						
					//load large image of next/previous content div
					$('<img id="fp_preview" />').load(function(){
						$fp_loading.hide();
						var $large_img 		= $(this);
						var $fp_preview 	= $('#fp_preview');
						
						//make the current one slide left if clicking next
						//make the current one slide right if clicking previous
						var animate_to 		= -$fp_preview.width();
						var animate_from	= $(window).width();
						if(way==0){
							animate_to 		= $(window).width();
							animate_from	= -$fp_preview.width();
						}
						
						//now we want that the thumb (of the last image viewed) 
						//stays centered on the screen
						centerImage($current,false,1000);
						
						$fp_preview.stop().animate({'left':animate_to+'px'},500,function(){
							$(this).remove();
							$large_img.addClass('fp_preview');
							getFinalValues($large_img);
							var largeW 	= $large_img.data('width');
							var largeH 	= $large_img.data('height');
							var $window	= $(window);
							var windowW = $window.width();
							var windowH = $window.height();
							var windowS = $window.scrollTop();
							$large_img.css({
								'width'	: largeW+'px',
								'height': largeH+'px',
								'top'	: windowH/2 -largeH/2 + windowS + 'px',
								'left'		: animate_from + 'px',
								'opacity' 	: 1	
							}).appendTo($fp_gallery)
							  .stop()
							  .animate({'left':windowW/2 -largeW/2+'px'},500,function(){photo_nav = true;});
						});
					}).attr('src',$current.find('img').attr('alt'));	
				}
				
				//show the next, previous and close buttons
				function showPreviewFunctions(){
					$fp_next.stop().animate({'right':'0px'},500);
					$fp_prev.stop().animate({'left':'0px'},500);
					$fp_close.show();
				}
				
				//hide the overlay, and the next, previous and close buttons
				function hidePreviewFunctions(){
					$fp_next.stop().animate({'right':'-50px'},500);
					$fp_prev.stop().animate({'left':'-50px'},500);
					$fp_close.hide();
					$fp_overlay.hide();
				}
				$( '#fp_overlay, #fp_close').on('click', function(event) {
    $("#fp_preview, #fp_overlay").hide();$fp_next.stop().animate({'right':'-50px'},500);
					$fp_prev.stop().animate({'left':'-50px'},500);
});

$( '#show').on('click', function(event) {
    $("#lightbox, #overlay").show();
});
				function getFinalValues($image){
					var widthMargin		= 0
					var heightMargin 	= 20;
					var $window			= $(window);
					var windowH      	= $window.height()-heightMargin;
					var windowW      	= $window.width()-widthMargin;
					var theImage     = new Image();
					theImage.src     = $image.attr("src");
					var imgwidth     = theImage.width;
					var imgheight    = theImage.height;

					if((imgwidth > windowW)||(imgheight > windowH)){
						if(imgwidth > imgheight){
							var newwidth = windowW;
							var ratio = imgwidth / windowW;
							var newheight = imgheight / ratio;
							theImage.height = newheight;
							theImage.width= newwidth;
							if(newheight>windowH){
								var newnewheight = windowH;
								var newratio = newheight/windowH;
								var newnewwidth =newwidth/newratio;
								theImage.width = newnewwidth;
								theImage.height= newnewheight;
							}
						}
						else{
							var newheight = windowH;
							var ratio = imgheight / windowH;
							var newwidth = imgwidth / ratio;
							theImage.height = newheight;
							theImage.width= newwidth;
							if(newwidth>windowW){
								var newnewwidth = windowW;
								var newratio = newwidth/windowW;
								var newnewheight =newheight/newratio;
								theImage.height = newnewheight;
								theImage.width= newnewwidth;
							}
						}
					}
					$image.data('width',theImage.width);
					$image.data('height',theImage.height);
				}
				
				//slides the scroller one picture 
				//to the right or left
				function slideThumb(way){
					if(way==1){
						++current;
						var $next = $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')')
													 .find('.content:nth-child('+parseInt(current+1)+')');
						if($next.length > 0)
							centerImage($next,false,600);
						else{
							--current;
							return;
						}	
					}
					else{
						--current;
						var $prev = $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')')
													 .find('.content:nth-child('+parseInt(current+1)+')');
						if($prev.length > 0)
							centerImage($prev,false,600);
						else{
							++current;
							return;
						}	
					}					
				}
				
				//when we stop sliding 
				//we may want that the closest picture to the center 
				//of the window stays centered
				function checkClosest(){
					var center 				= $(window).width()/2;
					var current_distance 	= 99999999;
					var idx					= 0;	
					$container				= $fp_thumbScroller.find('.container:nth-child('+parseInt(gallery_idx+1)+')');
					$container.find('.content').each(function(i){
						var $obj 		= $(this);
						//the offset left of the element
						var obj_left 	= $obj.offset().left;
						//the center of the element is its offset left plus 
						//half of its width
						var obj_center 	= obj_left + ($obj.width()/2);
						var distance	= Math.abs(center-obj_center);
						if(distance < current_distance){
							current_distance 	= distance;
							idx					= i;
						}	
					});
					var $new_current 	= $container.find('.content:nth-child('+parseInt(idx+1)+')');
					current 			= $new_current.index();
					centerImage($new_current,false,200);
				}
			});
		</script>
		
		</body>
		</html>