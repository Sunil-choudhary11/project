<?php include 'config.php'; include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Students</title>
</head>
<body class="container mt-4">
<h2>Students List</h2>
<table class="table table-bordered">
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th>
</tr>
<?php
$res = mysqli_query($conn,"SELECT * FROM students");
while($row = mysqli_fetch_assoc($res)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['course']; ?></td>
<td>
<a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="delete_student.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
<a href="add_marks.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Add Marks</a>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>
