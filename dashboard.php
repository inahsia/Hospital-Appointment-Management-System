
<?php
		require_once('header/header1.php');
		  include 'config.php';
	      $sql="SELECT COUNT(*) AS count FROM appointment";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc();
			$rowCount=$row["count"];
			
			}
			else 
			{
				$rowCount=0;
				
			}
		$sql="SELECT COUNT(*) AS count FROM appointment where status = 'canceled'";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc();
			$rowCounts=$row["count"];
			
			}
			else 
			{
				$rowCounts=0;
				
			}
	$sql="SELECT COUNT(*) AS count FROM appointment where status = 'approved'";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc();
			$rowCountss=$row["count"];
			
			}
			else 
			{
				$rowCountss=0;
				
			}
	$sql="SELECT COUNT(*) AS count FROM appointment where date >= CURDATE() AND (status IS NULL)";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc();
			$rowCountsss=$row["count"];
			
			}
			else 
			{
				$rowCountsss=0;
				
			}
			
?>
<div class="cardsss">

<div class="row">
  <div class="col-sm-6">
    <div class="card text-white mb-3" style="background-color:#3D52A0; height: 10rem;">
      <div class="card-body">
        <h3 class="card-title">New Appointments</h3>
        <h6 class="card-text">The number of new enteries : <?php echo $rowCountsss; ?></h6>
       <a href="newappointment.php" class="btn  btn-light">check</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card "style=" height: 10rem;">
      <div class="card-body">
        <h3 class="card-title">Approved Appointments</h3>
        <h6 class="card-text">The number of Approved enteries : <?php echo $rowCountss; ?></h6>
     <a href="approved_data.php" class="btn  text-white " style="background-color:#3D52A0; ">check</a>
      </div>
    </div>
  </div>
    <div class="col-sm-6">
    <div class="card" style=" height: 10rem;">
      <div class="card-body">
        <h3 class="card-title">Cancelled Appointments</h3>
        <h6 class="card-text">The number of Cancelled entries: <?php echo $rowCounts; ?></h6>
         <a href="cancel_data.php" class="btn  text-white " style="background-color:#3D52A0; ">check</a>
      </div>
    </div>
  </div>
    <div class="col-sm-6">
    <div class="card text-white mb-3" style="background-color:#3D52A0; height: 10rem;">
      <div class="card-body">
        <h3 class="card-title">All Appointments</h5>
        <h6 class="card-text">The number of all enteries : <?php echo $rowCount; ?></h6>
        <a href="allappointments.php" class="btn  btn-light">check</a>
      </div>
    </div>
  </div>
</div>
</div>
	</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
	</script>
 

