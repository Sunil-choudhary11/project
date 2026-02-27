<?php 
session_start();
include 'config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Admin Login</h2>
<form method="POST">
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
<button name="login" class="btn btn-success">Login</button>
<a href="signup.php">Create Account</a>
</form>

<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = mysqli_query($conn,"SELECT * FROM admin WHERE email='$email'");
    $user = mysqli_fetch_assoc($res);

    if($user && password_verify($password,$user['password'])){
        $_SESSION['admin'] = $email;
        header("Location: dashboard.php");
    }else{
        echo "<div class='alert alert-danger mt-2'>Invalid Login</div>";
    }
}
?>
</body>
</html>