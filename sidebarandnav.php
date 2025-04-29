<?php
    require_once('header/header1.php');
    include 'config.php';
    echo "Header and config included successfully.";
    
    $sql = "SELECT COUNT(*) AS count FROM appointment";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rowCount = $row["count"];
    } else {
        $rowCount = 0;
    }
?>
<html>
<body>
  <p>The number of rows in the table on the other page is: <?php echo $rowCount; ?></p>
</body>
</html>