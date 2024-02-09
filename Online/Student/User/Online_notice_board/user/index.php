<?php 
error_reporting(0);
session_start();
include('../connection.php');
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Online Notice Board</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--font import-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    

    <!--BootStrap assets hosted from CDN(Content Delivery Network for faster loading of pages) -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    
     <!--Icons ke liye-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Font awesome icons-->
<!--    <script src="https://kit.fontawesome.com/5c158c144b.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="structure.css" />
    <script>
        $("#file").change(function() {
            comsole.log("hello");
          filename = this.files[0].name;
          console.log(filename);
        });
    </script>

</head>


  <body>
   <header>
            <div class="header-left-box">
                <div class="logo-box log-box">
                </div>
                <h1>ONLINE NOTICE BOARD </h1>
            </div>
            <div class="header-right-box .clearfix">
              <h1>Student Name</h1>
              <div class="toggle-icon">
                  <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
</header>
    

    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar"> <ul class="navigation-list">
      
      <li style='margin-top:-10px;'>
          
        
     
			<!-- check users profile image -->
			<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here" style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="index.php?page=update_profile_pic"><img title="Update Your profile pic Click here"  style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			?>
			
      <li class="navigation-items"><a href="index.php?page=notification" class="navigation-links"><i class="fa fa-list-alt mr-2 fa-md" aria-hidden="true"></i>
               Latest Notices</a></li>
               <li class="navigation-items"><a href="get-result.php" class="navigation-links"><i class="fa fa-pencil-square-o mr-2 fa-md" aria-hidden="true"></i>
               Results</a></li>
               <li class="navigation-items"><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" class="navigation-links" target="_blank"><i class="fa fa-credit-card mr-2 fa-md" aria-hidden="true"></i>
               Payments</a></li>
			<li class="navigation-items"><a href="index.php?page=update_password" class="navigation-links">
               <i class="fa fa-key mr-2 fa-md" aria-hidden="true"></i> Reset Password</a></li>

               <li class="navigation-items"><a href="index.php?page=update_profile" class="navigation-links"><i class="fa fa-sliders mr-2 fa-md" aria-hidden="true"></i>
               Update profile</a></li>
       <li class="navigation-items"><a href="logout.php" class="navigation-links active"><i class="fa fa-power-off mr-2 fa-md" aria-hidden="true"></i>
               Logout</a></li>
          </ul>
      
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="notification")
			{
				include('notification.php');
			
			}
			if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="update_profile_pic")
			{
				include('update_profile_pic.php');
			
			}
		  }
		  else
		  {
		  include('notification.php');
		  ?>
		  <!-- container end-->
		   
		  
		  <h1 class="page-header">Dashboard</h1>
		  
		  
<?php } ?>
          
         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
