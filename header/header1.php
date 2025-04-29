<!doctype html>
<html lang="en">
  <head>
  <style>

 :root {
            --primary-color: #4a90e2;
            --bg-color: #f4f7fa;
            --text-color: #333;
            --sidebar-bg: #ffffff;
            --sidebar-hover: #e6f0ff;
        }
        body {
         font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
        }
        .sidebar {
            height: 100vh;
            width: 15%;
            position: fixed;
            float:left;
            top: 0;
            left: 0;
            background-color: var(--sidebar-bg);
           
            transition: 0.3s;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            white-space: nowrap;
        }
        .sidebar-header {
			
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e0e0e0;
        }
        .sidebar-header h3 {
			padding-bottom:30px;
			padding-top: 30px;
			padding-left:65px;
            margin: 0;
            font-size: 1.2em;
            color: var(--primary-color);
        }
      
        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 16px;
            color: var(--text-color);
            display: flex;
            align-items: center;
            transition: 0.2s;
        }
         .sidebar a:hover {
            background-color: var(--sidebar-hover);
            color: var(--primary-color);
        }
        .sidebar a i {
            min-width: 30px;
            font-size: 20px;
        }
		.nav2{
			height:100px;
			width:85%;
			float:right;
		
		}
		
     #drop{
		 border:none;
		  padding: 15px 25px;
            text-decoration: none;
            font-size: 16px;
            color: var(--text-color);
            display: flex;
            align-items: center;
            transition: 0.2s;
	 }
	 .btn:hover{
		  background-color: var(--sidebar-hover);
            color: var(--primary-color);
	 }
	.dropdown:hover{
		 background-color: var(--sidebar-hover);
         color: var(--primary-color);
	}
	#dev-table{
		margin-left:25%;
	}		
      .btn i{ min-width: 30px;
            font-size: 20px;}  
.dropdown-menu
{
	        padding: 15px 25px;
            text-decoration: none;
            font-size: 16px;
            color: var(--text-color);
            display: flex;
            align-items: center;
            transition: 0.2s;
			width:230px;
            outline: none;

}
.navbar{
	height:60px;
	background-color:#3D52A0 !important;
	box-shadow: 0 0 15px rgba(0,0,0,0.1);
	
}
.navbar-brand{
	color:#fff;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 18px;
    text-align: center;
}

table, th, td {
    border: 1px solid #dddddd;
    padding: 8px;
}

thead {
    background-color: #f2f2f2;
}

th, td {
    text-align: center;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

/* Adding vertical borders to ensure vertical grid lines */
td + td, th + th {
    border-left: 2px solid #dddddd;
}

 .cardsss{
	 
	 width:70%;
	 height:500px;
	 margin-left:20%;
	 padding-top:200px;
 }
 .card{
	 margin-top:20px;
 }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <header>
<div id="mySidebar" class="sidebar">
        <div class="sidebar-header">
            <h3>Dashboard</h3>
          
        </div>
        <a href="#"><i class="fas fa-home"></i> <span>Home</span></a>
        <a href="dashboard.php"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a>
		   <div class="dropdown">
		  <button  id="drop" class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa-solid fa-calendar-check"></i>Appointment 
		  </button>
		  <ul class="dropdown-menu">
			<li><a class="dropdown-item" href="newappointment.php">New Appointment</a></li>
			<li><a class="dropdown-item" href="approved_data.php">Approved Appointment</a></li>
			<li><a class="dropdown-item" href="cancel_data.php">cancelled Appointment</a></li>
			<li><a class="dropdown-item" href="allappointments.php">All Appointment</a></li>
		  </ul>
			</div>
        <a href="#"><i class="fas fa-user"></i> <span>Profile</span></a>
      
    </div>
	</header>
	<section>
	<div class="nav2">
		<nav class="navbar  navbar-expand-lg "  data-bs-theme="dark">
		 <div class="container-fluid" >
    <a class="navbar-brand" href="#">HealthCare</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
		  
        </li>
</ul>
    </div>
  </div>
		</nav>
	</div>	
	</section>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybH2q6KfUJ6ALYBdGNLREHw6FxJ2V6gXg8le0TZBjJiqzWVu1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-HQEOJaLHzT6vMULcCQkYIUN0JUpbZ/SW53PhZESz3WAU6k5/JXhQNEeHFlRDL6U1" crossorigin="anonymous"></script>

</body>
</html>