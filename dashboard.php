<?php 
include 'config.php'; 
include 'navbar.php'; 

$count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM students"));
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body class="container mt-4">
<div class="card p-4">
<h3>Total Students: <?php echo $count['total']; ?></h3>
</div>
</body>
</html>