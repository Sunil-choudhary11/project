<?php include 'config.php'; include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Search Students</title>
</head>
<body class="container mt-4">
<h2>Search Student</h2>

<form method="GET" class="mb-3">
<input type="text" name="search" class="form-control" placeholder="Enter student name">
</form>

<table class="table table-bordered">
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Course</th>
</tr>

<?php
if(isset($_GET['search'])){
$search=$_GET['search'];
$res=mysqli_query($conn,"SELECT * FROM students WHERE name LIKE '%$search%'");
while($row=mysqli_fetch_assoc($res)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['course']; ?></td>
</tr>
<?php }} ?>
</table>
</body>
</html>