<?php
$db = mysqli_connect("localhost","root","","code_for_good");
 if (!$db) {
    die('Connect Error: ' . mysqli_connect_error());
	}
	?>
	
				 
	  
	


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CFG</title>
 <link href="C:\Users\Vivek Yadav\Desktop\database.js">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">CFG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="adminpanel.html">Panel</a>
                    </li>
                    <li class="page-scroll">
                        <a href="">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
       <section class="success" id="ComplaintPanel">
        
            
                <div class="col-lg-12 text-center">
                <br><br>
                    <h2>Women Details</h2>
                    
                
            
        </div>
    </section>

    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                 </div>
            </div>
			<table class="table table-striped">	
			<?php
			$db = mysqli_connect("localhost","root","","code_for_good");
			$sql = "SELECT * FROM user";
			$res=mysqli_query($db,$sql);
	       $row2=mysqli_fetch_array($res,MYSQLI_ASSOC);
		  
	 
	    $user = $row2['us_id'];
		 $name = $row2['name'];
		  $duration_of_stay = $row2['duration_of_stay'];
		   $mobile = $row2['mobile'];
		    $email = $row2['email'];
			 $education = $row2['education'];
			  $training= $row2['training'];
			   $background= $row2['background'];
			    $skills = $row2['skills'];
				 $current_salary = $row2['current_salary'];
				 $current_location= $row2['current_location'];
				 $future_planes= $row2['future_planes'];
				 $remarks=$row2['Remarks'];
				  
					   
					  
      
       echo   


	  "
  
    <tr>
    <th><b>User ID </b></th>
    <th> "  .$user.   "</th>
    </tr>
    <tr>
    <td><b>Member Name : </b></td>
    <td>"  .$name.      "</td>
    </tr>
    <tr>
    <td><b>Contact Details : </b></td>
              
	</tr>
    <tr>
    <td><b>Phone No : </b></td>
    <td> ".$mobile."         </td>
    <td><b>Email : </b></td>
    <td>   ".$email.       "  </td>
    </tr>
    <tr>
    <td><b>Educational Details </b></td>
    <td> "     .$education.      " </td>
    </tr>
    <tr>
    <td><b>Vocational Training : </b></td>
    <td> ".  $training       ."  </td>
    <td><b>Background : </b></td>
    <td>   ".$background.      "   </td>  
    </tr>
    <tr>
    
    <td><b>Skills : </b></td>
    <td> "      .$skills ."      </td>
    </tr>
    <tr>
    
    <td><b>Current Salary : </b></td>
    <td> ". $current_salary ."          </td>
    </tr>
    <tr>
    <td><b>Current Location :</b></td>
    <td>  ".  $current_location."           </td>
    </tr>
	
    <tr>
    <td><b>Future Plans</b></td>
    <td>  "   .$future_planes.           "</td>
    </tr>
    <tr>
    <td><b>Remarks</b></td>
    <td> "   .$remarks .  "        </td>
    </tr>
	</table>"
	?>
	<h3>acivity tracking</h3>
	<table class="table table-striped">	
	
   <?php 
	
    $db = mysqli_connect("localhost","root","","code_for_good");
	 $sql1 = "SELECT * FROM activity_tracking";
			$resl=mysqli_query($db,$sql1);
	       $row3=mysqli_fetch_array($resl,MYSQLI_ASSOC);
		   $Activity = $row3['Activity'];
				   $start_date = $row3['start_date'];
				    $end_date= $row3['end_date'];
					 $location= $row3['location'];
					   $target_user= $row3['target_user'];
					   $number_engaged=$row3['number_engaged'];
					   $shelter_home_response=$row3['shelter_home_response'];
					   $women_response=$row3['women_response'];
					   echo "
    
    <tr>
    <td><b>Activity</b></td>
    <td> "   .$Activity.      " </td>
    <td><b>Date Start</b></td>
    <td>"      .$start_date.    " </td>
   </tr>
   <
   tr>
   <td><b>End Date</b></td>
   <td>  " .$end_date.   "         </td>
   <td><b>Location </td>
   <td>  "   .$location.    "   </td>
   </tr>
   <tr>
   <td><b>Target Audience</b></td>
   <td> "  .$target_user. "              </td>
   <td>Number Engaged</td>
   <td>   " .$number_engaged. "           </td>
   </tr>
   
   <tr>
   <td>Shelter Home : </td>
   <td>   " .$shelter_home_response.  "            <td>
   </td>
   <tr>
   <tr>
   <td>Women : </td>
   <td> " .$women_response. "       </td>
   </tr>
</table>"?>
</form>    
</div>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Manpada, Ghodbunder Road, Thane
                            <br>Mumbai - Maharahtra</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                         </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Kashmata</h3>
                        <p>NGO Partner - <a href="http://kshamata.org"> CFG </a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Ksmata 2017 : All rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
