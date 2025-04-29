
<?php

include 'config.php';

    $id = $_POST['id'];

	$action = $_POST['action'];

if ($action == 'approve') {
    $status = 'approved';
    $sql = "UPDATE appointment SET status = '$status' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Appointment approved successfully.";
    } else {
        echo "Error approving appointment: " . mysqli_error($conn);
    }
} elseif ($action == 'cancel') {
    $status = 'canceled';
    $sql = "INSERT INTO cancel SELECT * FROM appointment WHERE id = $id";  
    if (mysqli_query($conn, $sql)) {
        echo "Appointment canceled successfully.";
    } else {
        echo "Error canceling appointment: " . mysqli_error($conn);
    }
	$sql = "DELETE FROM appointment WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error deleting record: " . mysqli_error($conn);
		}
}

?>
