<?php
		 require_once('header/header1.php');
		  include 'config.php';
			$sql = "SELECT * FROM appointment WHERE status = 'approved'";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0)
			{
			?>
			<div class=infomation>
			<div class="container">
		  <div class="panel panel-primary">
 
		<table class="table   table-hover"style="width:70%"  id="dev-table">
				  <thead>
				<tr>
				  <th  class="table-primary" >Id</th>
				  <th class="table-primary" >firstname</th>
				  <th class="table-primary" >email</th>
				  <th class="table-primary" >phone number</th>
				   <th class="table-primary" >Status</th>
				</tr>
		</thead>
				<?php
		 while($row = mysqli_fetch_assoc($result))	
			{
				?>
		
				 <tr>
					 <form action='handle_action.php' method='post'>
					  <td> <?php echo $row["id"] ?></td>
					 <td> <?php echo $row["user_name"] ?></td>
					  <td> <?php echo $row["user_email"] ?></td>
					 <td> <?php echo $row["user_num"] ?></td>
					 <td> <?php echo $row["status"] ?></td>
					 </form >
					
			
				<?php
			}		
		}
		?>
	</table>
	

	</div>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
