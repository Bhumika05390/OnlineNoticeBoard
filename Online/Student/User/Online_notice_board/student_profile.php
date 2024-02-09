<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nexus | RGUKT-Ongole</title>
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
                    <img src="../img/rgukt.png" alt="logo" />
                </div>
                <h1>NEXUS | RGUKT-ONGOLE </h1>
            </div>
            <div class="header-right-box .clearfix">
              <div class="user-box logo-box">
                      <img src="profile_photos/O180981.jpg" alt="Nexus" />
              </div>
              <h1>G.BHUMIKA</h1>
              <div class="toggle-icon">
                  <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
</header>    <main>
        
      
      
      <ul class="navigation-list">
      
      <li style='margin-top:-10px;'>
          
          <div class='profile-img-box'>
                        <img src='profile_photos/O180981.jpg' alt='Profile img'>
                  </div>
     
      </li><hr style='margin-top:-10px;'>
       <li class="navigation-items"><a href="student_profile.php" class="navigation-links"><i class="fa fa-id-card mr-2 fa-md" aria-hidden="true"></i> Profile</a></li>
       <li class="navigation-items"><a href="registrations.php" class="navigation-links"><i class="fa fa-registered mr-2 fa-md" aria-hidden="true"></i>
               Registrations</a></li>
        <li class="navigation-items"><a href="attendance.php" class="navigation-links"><i class="fa fa-bar-chart mr-2 fa-md" aria-hidden="true"></i>  Attendance</a></li>
        
        <li class="navigation-items"><a href="current_sem.php" class="navigation-links"><i class="fa fa-table mr-2 fa-md" aria-hidden="true"></i>
               Current Sem</a></li>
               
               
        <li class="navigation-items"><a href="exam_seating.php" class="navigation-links"><i class="fa fa-sliders mr-2 fa-md" aria-hidden="true"></i>
               Exam Seating</a></li>
        
       <li class="navigation-items"><a href="get-result.php" class="navigation-links"><i class="fa fa-pencil-square-o mr-2 fa-md" aria-hidden="true"></i>
               Results</a></li>
       <li class="navigation-items"><a href="faculty-survey.php" class="navigation-links"><i class="fa fa-list-alt mr-2 fa-md" aria-hidden="true"></i>
               Feedback</a></li>
               
        <li class="navigation-items"><a href="fee-details.php" class="navigation-links"><i class="fa fa-inr mr-2 fa-md" aria-hidden="true"></i>&nbsp
                Fee Details</a></li>
        
        <li class="navigation-items"><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" class="navigation-links" target="_blank"><i class="fa fa-credit-card mr-2 fa-md" aria-hidden="true"></i>
               Payments</a></li>
       
       <li class="navigation-items"><a href="complaint.php" class="navigation-links"><i class="fa fa-comment mr-2 fa-md" aria-hidden="true"></i>
               Grievances</a></li>
        
        <!--<li class="navigation-items"><a href="#" class="navigation-links"><i class="fa fa-comment mr-2 fa-md" aria-hidden="true"></i>-->
        <!--       Grievances</a></li>-->
        
       <li class="navigation-items"><a href="outpass.php" class="navigation-links">
               <i class="fa fa-forward mr-2 fa-md" aria-hidden="true"></i> Outpass</a></li>
       <li class="navigation-items"><a href="reset-password.php" class="navigation-links">
               <i class="fa fa-key mr-2 fa-md" aria-hidden="true"></i> Reset Password</a></li>


       <li class="navigation-items"><a href="../includes/logout.inc.php" class="navigation-links active"><i class="fa fa-power-off mr-2 fa-md" aria-hidden="true"></i>
               Logout</a></li>
   </ul>        <div class="content-box">
            <h1 class="heading-primary heading-underline"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Student Profile</h1>
            <br>
            
            <div class="container border p-2 profile-container">
                                <div class="row">
                            <div class="col-lg-6 col-sm-10 profile-title order-2 order-sm-2 order-md-2 order-lg-1  ">
                                <p class="title">GARIKAPATI BHUMIKA</p>
                                <p>O180981 &nbsp; HT.No:1814134575</p>
                                
                                <p><i class="fas fa-calendar-day pr-3"></i>2003-09-03<i class="fa fa-phone pl-4 pr-2"></i>9866283547</p>
                                <p><i class="fa fa-envelope pr-3" ></i>O180981@rguktong.ac.in</p>
                                
                                <p><i class="fa fa-hotel pr-2"></i>B-416</p>
                                <p>Year &amp; Branch: E2 &nbsp;Computer Science & Engineering </p>
                            </div>
                            <div class="col-lg-6 col-sm-11 order-1 order-sm-1 order-md-1 order-lg-2 ">
                                <img class="profile-image-avatar"src="profile_photos/O180981.jpg">
                            </div>
                   
                </div>
                <hr>
                <div class="row">
                 <div class=" family-title mt-4">
                    <p>Mother Name:&nbsp; GARIKAPATI RAJESWARI</p>
                    <p>Father Name: &nbsp; GARIKAPATI SITHARAMAAIH</p>
                    <p>Guardian Name:&nbsp;&nbsp;GARIKAPATI VINEELA</p>
                    <p>Parent P.Number&nbsp;9618903354</p>
                    <p>Address: &nbsp;1-133, Masid bazaar, Paludevarlapadu, Muppalla mandal, Guntur District</p>
                </div>
                </div>
                
            </div>
            
            
<!--
            <div class="container border p-2 profile-container">
                <div class="row">
                  
                            
                            <div class="col-lg-4 col-sm-11">
                                <img class="profile-image-avatar"src="profile_photos/O180981.jpg">
                            </div>
                            <div class="col-lg-8 col-sm-10 profile-title">
                                <p class="title">GARIKAPATI BHUMIKA</p>
                                
                                <p>O180981(CSE) &nbsp; HT.No:1814134575</p>
                                
                                <p><i class="fas fa-calendar-day pr-3"></i>2003-09-03<i class="fa fa-phone-alt pl-4 pr-2"></i>9866283547</p>
                                <p><i class="fa fa-envelope pr-3" ></i>O180981@rguktong.ac.in</p>
                                
                                <p><i class="fa fa-hotel pr-2"></i>B-416</p>
                                <p>Branch&amp;Year: E2 &nbsp;CSE </p>
                                <p><i class="far fa-address-card pr-2"></i>1-133, Masid bazaar, Paludevarlapadu, Muppalla mandal, Guntur District</p>
                            </div>
                   
                </div>
            </div>
            
            <br>
            <div class="container border p-4 profile-container ">
                
                <div class="row d-flex justify-content-center">
                    <h2 class="p-3 ml-4 text-light bg-dark details-head" style="text-align:center;">Details</h2>
                    
                </div>
                <div class=" details-profile mt-4">
                    <p class=""><span class="btn btn-secondary family-details">MOTHER NAME:</span> &nbsp;GARIKAPATI RAJESWARI</p>
                    <p><span class="btn btn-secondary family-details ">FATHER NAME:</span> &nbsp;GARIKAPATI SITHARAMAAIH</p>
                    <p><span class="btn btn-secondary family-details">GUARDIAN NAME:</span> &nbsp;&nbsp;GARIKAPATI VINEELA</p>
                    <p><span class="btn btn-secondary family-details">PARENT P.Number</span> &nbsp;9618903354</p>
                    <p><span class="btn btn-secondary family-details ">ADDRESS:</span> &nbsp;1-133, Masid bazaar, Paludevarlapadu, Muppalla mandal, Guntur District</p>
                </div>
            

            </div>
-->
            
            
             <div class="edit-student-data-box">
                  
                  <form class="edit-student-data" method="POST" enctype="multipart/form-data">
                    <div class="btn-close" id="close-window-btn">
                          <i class="fa fa-times" aria-hidden="true"></i>
                      </div>
                    <h1 class="heading-primary heading-underline flex-child-full-width"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Edit Student Profile</h1>
                    <div class="error-box mb-2">
                      <p >hii</p>
                    </div>
                    <div class="response-box"></div>

                    <div class='details-box'>
                        <h2 class='details-heading'>Name</h2>
                        <input type='text' class='details-input' id='name' name='name' value='GARIKAPATI BHUMIKA' disabled='disabled'>
                      </div>
                      
                      <div class='details-box'>
                          <h2 class='details-heading'>College ID</h2>
                        <input type='text'  class='details-input' id='id' name='id' value='O180981' disabled='disabled'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Email</h2>
                        <input type='text' class='details-input' id='email' name='email' value='O180981@rguktong.ac.in'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Hallticket</h2>
                        <input type='text' class='details-input' id='hall_ticket' name='hall_ticket' value='1814134575' disabled='disabled'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Date of Birth</h2>
                        <input type='date' class='details-input' id='dob' name='dob' value='2003-09-03'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Gender</h2>

                          <select class='details-input' name='gender' id='gender'>
                          <option  value='M'>M</option><option selected value='F'>F</option>
                          </select>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Year</h2>
                          <select class='details-input' name='year' id='year'>
                          <option  value='P1'>P1</option><option  value='P2'>P2</option><option  value='E1'>E1</option><option selected value='E2'>E2</option><option  value='E3'>E3</option><option  value='E4'>E4</option>
                          </select>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Branch</h2>
                          <select class='details-input' name='branch' id='branch'>
                          <option selected value='CSE'>Computer Science & Engineering</option><option  value='CHEM'>Chemical Engineering</option><option  value='CVE'>Civil Engineering</option><option  value='ME'>Mechanical Engineering</option><option  value='MME'>Metallurgical & Materials Engineering</option><option  value='ECE'>Electronics & Communications Engineering</option><option  value='EEE'>Electrical & Electronics Engineering</option><option  value='PUC'>Pre University Course</option>
                          </select>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Section</h2>
                        <input type='text' class='details-input' id='section' name='section' value='CSE-3'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Hostel Room</h2>
                        <input type='text' class='details-input' id='hostel_room' name='hostel_room' value='B-416'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Mother Name</h2>
                        <input type='text' class='details-input' id='mother_name' name='mother_name' value='GARIKAPATI RAJESWARI'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Father Name</h2>
                        <input type='text' class='details-input' id='father_name' name='father_name' value='GARIKAPATI SITHARAMAAIH'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Guardian Name</h2>
                        <input type='text' class='details-input' id='guardian_name' name='guardian_name' value='GARIKAPATI VINEELA'>
                      </div>
                      
                      <div class='details-box'>
                          <h2 class='details-heading'>Student mobile number</h2>
                        <input type='text' class='details-input' id='stu_mobile' name='stu_mobile' value='9866283547'>
                      </div>
                      <div class='details-box'>
                          <h2 class='details-heading'>Parent mobile number</h2>
                        <input type='text' class='details-input' id='parent_mobile' name='parent_mobile' value='9618903354'>
                      </div>
                      
                      <div class='details-box'>
                          <h2 class='details-heading'>Address</h2>
                        <input type='text' class='details-input' id='address' name='address' value='1-133, Masid bazaar, Paludevarlapadu, Muppalla mandal, Guntur District'>
                      </div>
                      <div><input type='text' id='profile' name='profile' value='O180981.jpg' hidden></div>                      <div class="details-box mt-5 mb-5" style="margin-left:200px;">
                          <h2 class="details-heading" >Upload Image</h2>
                          <div class="file-upload-box btn-full file btn btn-lg" style="width:350px;margin-top:6px;margin-right:200px;">
                                <input type="file"  name="file" id="file"/>
                                      
                          </div>
                      </div>
                      <button type="button" class="update-details btn-full" style="margin-left=20px;" id="update-student-details-btn" >Update Details</button>
                    
                  </form>
                </div>


                <button type="button" id ="profile-edit-btn" class='profil btn-full mt-4'><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Details</button>

            

        </div>


    </main>
    <footer>
    <div class="footer-left">
        Copyright &copy; RGUKT ONGOLE
    </div>
    <div class="footer-right">
        <i class="fa fa-user" aria-hidden="true"></i>
        Developed by 
        <div class="developer-data-box">
            <a href="#" style="color:white" onClick = "return false">Student Developer Team</a>
            <div class="developer-details">
                <h2>Developer</h2>
<!--                <div class="developer-img-box"><img src="profile_photos/O180981.jpg" alt=""></div>-->
                <p>RGUKT Ongole</p>
                <p>CSE department</p>
            </div>
        </div>
    </div>
</footer>    <script src="js/script.js"></script>
    <script src="js/ajax_calls.js"></script>
</body>

</html>