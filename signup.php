<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Signup</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Admin Sign Up</h2>
<form method="POST">
<input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
<button name="signup" class="btn btn-primary">Sign Up</button>
<a href="login.php">Already have account?</a>
</form>

<?php
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO admin(username,email,password) VALUES('$username','$email','$password')");
    echo "<div class='alert alert-success mt-2'>Signup Successful</div>";
}
?>
</body>
</html>