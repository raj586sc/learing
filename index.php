<?php 
	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="mod3.css">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
        
  <header class="nav-header">
    <nav id="header-nav" class="navbar navbar-default">
       <div class="container">

         <div class='navbar-header'>
      	  <a href="index.php" class=" visible-md visible-lg" >
      		<div id="logo-img"><img src="mf.png"></div>
      	  </a>
      	 <div class="navbar-brand">

      	  <a href="index.php"><h1>Maharashtra Food</h1></a>
      	  <p class="nav-brand">Certified by FSSAI</p>
        </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         </div>
         <div id="collapsable-nav" class="collapse navbar-collapse ">
          <ul id="nav-list" class="nav navbar-nav navbar-right visible-xs  visible-sm  visible-md visible-lg ">
            <li class="text-center Home-item">
              <a href="index.php"><span class="glyphicon glyphicon-home"></span><p class="item ">Home</p></a>
            </li>            
            <li class="text-center Menu-item">
              <a href="snippets\menu-items-title.html"><span class="glyphicon glyphicon-th"></span><p class="item ">Menu</p></a>
            </li>            
            <li class="text-center About-item">
              <a href="mod3.html"><span class="glyphicon glyphicon-info-sign"></span><p class="item">About</p></a>
            </li>   
            <li id="phone" class="hidden-xs">
            	<a href="tel:+91-99691-67419">
            		<span>+91 99691 67419</span></a><div>* We deliver</div>
      
            </li>  
            <li id="logo2"><div><img src="avtar.png" alt="Avatar"></div>
            	</li>       
          </ul> 
     

             
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['email'])) : ?>
			<p id="p3"><strong><?php echo $_SESSION['email']; ?></strong></p>
			<p id="p4"> <a href="index.php?logout='1'" style="color: orange;">logout</a> </p>
		<?php endif ?>
	</div>
        
    </div>

  
      <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:9969167419">
    <span class="glyphicon glyphicon-earphone"></span>
    9969167419
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>
    </div>
    </nav>
</header>
  <!--header end-->
  <!--main content-->
    <div id="main-content">
     
  <div>
<span id="span1"><img src="hp1.jpg"></span>
<span id="span2"><img src="hp2.jpg"></span>
<span id="span3"><img src="hp3.jpg"></span>
<span id="span4"><img src="hp4.jpg"></span>
</div>
   </div>
<!--main content end-->





		
</body>
</html>