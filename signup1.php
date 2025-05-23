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
                    <h2 class="title">SignUp</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="email" name="email">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="password" name="password">
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                            <label class="label">specification</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="specification" style="width:200px; height:30px;">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>ent</option>
                                    <option>dermatologist </option>
                                    <option>cardiologist</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                     
                        <div class="p-t-15">
                            <center><button name="submit" class="btn btn--radius-2 btn--blue" type="submit">Submit</button></center>
                        </div>
						<center><a href="signup.php">if sign up login here!</a></center>
                </div>
            </div>
        </div>
    </div>
	<?php 
  include 'config.php';



	if(isset($_POST["submit"]))
	{
	
		$first_name=$_POST["first_name"];
		$last_name=$_POST["last_name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$phone=$_POST["phone"];
		$specification=$_POST["specification"];
		
		
		$sql = "INSERT INTO database2 (first_name,last_name,email,specification,password,phone) VALUES('$first_name','$last_name','$email','$specification','$password',$phone)";
			if ($conn->query($sql) === TRUE)
				{
				  
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
