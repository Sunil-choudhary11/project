<?php include 'config.php'; include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
</head>
<body class="container mt-4">
<h2>Add Student</h2>
<form method="POST">
<input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
<input type="email" name="email" class="form-control mb-2" placeholder="Email">
<input type="text" name="phone" class="form-control mb-2" placeholder="Phone">
<input type="text" name="course" class="form-control mb-2" placeholder="Course">
<input type="text" name="class" class="form-control mb-2" placeholder="Class">
<button name="add" class="btn btn-success">Add Student</button>
</form>

<?php
if(isset($_POST['add'])){
    mysqli_query($conn,"INSERT INTO students(name,email,phone,course,class)
    VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[course]','$_POST[class]')");
    echo "<div class='alert alert-success mt-2'>Student Added</div>";
}
?>
</body>
</html>