
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
  

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="style.css" rel="stylesheet" media="all">
</head>



<body>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">SignIn</h2>
                    <form method="POST"  >
                        
                            <div class="col">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                   <input class="input--style-4 js-datepicker"  name="first_name" type="name">
                                </div>
                            </div>
                            
                     
                        
                            <div class="col">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                        <input class="input--style-4 js-datepicker" type="password" name="password">
                                </div>
                            </div>
                      
                          <div class="p-t-15">
                            <center><button name="login" class="btn btn--radius-2 btn--blue" type="submit">Login</button></center>
							
                        </div>
                        </div>
                     
					</form>
                </div>
            </div>
        </div>
    </div>
	<?php
	
	 include 'config.php';
	if(isset($_POST["login"])){
	$first_name=$_POST['first_name'];
	$password=$_POST['password'];
	
	
	
	$sql = "SELECT * FROM database2 where(first_name= '$first_name' && password='$password')";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       $count = mysqli_num_rows($result);  
		
	if($count == 1) {
	 header('Location: sidebarandnav.php');
	} else {
		echo "Invalid first name or password";
	}
  
	}
	 ?>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>


    <script src="js/global.js"></script>

</body>

</html>






