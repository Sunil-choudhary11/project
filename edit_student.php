<?php 
include 'config.php'; 
include 'navbar.php'; 
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM students WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
</head>
<body class="container mt-4">
<h2>Edit Student</h2>
<form method="POST">
<input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control mb-2">
<input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control mb-2">
<input type="text" name="phone" value="<?php echo $data['phone']; ?>" class="form-control mb-2">
<input type="text" name="course" value="<?php echo $data['course']; ?>" class="form-control mb-2">
<input type="text" name="class" value="<?php echo $data['class']; ?>" class="form-control mb-2">
<button name="update" class="btn btn-primary">Update Student</button>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($conn,"UPDATE students SET 
    name='$_POST[name]', 
    email='$_POST[email]', 
    phone='$_POST[phone]', 
    course='$_POST[course]', 
    class='$_POST[class]' 
    WHERE id=$id");
    header("Location: view_students.php");
}
?>
</body>
</html>
